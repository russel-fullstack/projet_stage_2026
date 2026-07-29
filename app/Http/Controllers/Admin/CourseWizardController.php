<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapiter;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Specialty;
use App\Services\MinioService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseWizardController extends Controller
{
    public function __construct(
        private MinioService $minio
    ) {
    }

    /**
     * Afficher le wizard de création.
     */
    public function create()
    {
        $specialties = Specialty::with('program')->get();

        return view('admin.wizard.create', [
            'specialties' => $specialties,
        ]);
    }

    /**
     * Enregistrer complètement un cours :
     * - cours
     * - image
     * - chapitres
     * - leçons
     * - vidéos
     */
    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | 1. Validation des données principales
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'specialty_id' => [
                'required',
                'exists:specialties,id',
            ],

            'title' => [
                'required',
                'string',
                'min:5',
                'max:255',
                'unique:courses,title',
            ],

            'description' => [
                'nullable',
                'string',
                'min:20',
            ],

            /*
             * Image obligatoire.
             */
            'image_cover' => [
                'required',
                'image',
                'mimes:jpeg,png,webp,jpg',
                'max:5120',
            ],

            /*
             * Les chapitres et les leçons
             * sont envoyés sous forme JSON.
             */
            'chapters' => [
                'required',
                'json',
            ],

            /*
             * Les vidéos sont envoyées séparément
             * via FormData.
             */
            'lesson_videos' => [
                'required',
                'array',
                'min:1',
            ],

            'lesson_videos.*' => [
                'required',
                'file',
                'mimes:mp4,webm,mov',
                'max:102400',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2. Début de la transaction SQL
        |--------------------------------------------------------------------------
        */

        DB::beginTransaction();

        /*
         * Liste des fichiers envoyés dans MinIO.
         *
         * Elle permet de supprimer les fichiers
         * si une erreur survient.
         */
        $uploadedFiles = [];

        try {

            /*
            |--------------------------------------------------------------------------
            | 3. Décoder les chapitres
            |--------------------------------------------------------------------------
            */

            $chaptersData = json_decode(
                $validated['chapters'],
                true
            );

            if (!is_array($chaptersData)) {
                throw new \Exception(
                    'Les données des chapitres sont invalides.'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | 4. Vérifier qu'il existe au moins un chapitre
            |--------------------------------------------------------------------------
            */

            if (empty($chaptersData)) {
                throw new \Exception(
                    'Le cours doit contenir au moins un chapitre.'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | 5. Récupérer les vidéos
            |--------------------------------------------------------------------------
            */

            $lessonVideos = $request->file('lesson_videos', []);

            if (empty($lessonVideos)) {
                throw new \Exception(
                    'Le cours doit contenir au moins une vidéo.'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | 6. Upload de l'image du cours vers MinIO
            |--------------------------------------------------------------------------
            */

            $imagePath = $this->minio->upload(
                $request->file('image_cover'),
                'courses/covers'
            );

            $uploadedFiles[] = $imagePath;

            /*
            |--------------------------------------------------------------------------
            | 7. Création du cours
            |--------------------------------------------------------------------------
            */

            $course = Course::create([
                'specialty_id' => $validated['specialty_id'],
                'title' => $validated['title'],
                'description' => $validated['description'] ?? null,
                'image_cover' => $imagePath,
            ]);

            /*
            |--------------------------------------------------------------------------
            | 8. Création des chapitres
            |--------------------------------------------------------------------------
            */

            foreach ($chaptersData as $chapterIndex => $chapterData) {

                /*
                 * Vérifier le titre du chapitre.
                 */
                if (
                    !isset($chapterData['title']) ||
                    trim($chapterData['title']) === ''
                ) {
                    throw new \Exception(
                        'Le titre d’un chapitre est obligatoire.'
                    );
                }

                /*
                 * Créer le chapitre.
                 */
                $chapiter = Chapiter::create([
                    'course_id' => $course->id,

                    'title' => $chapterData['title'],

                    'description' => $chapterData['description'] ?? null,

                    'order' => $chapterIndex + 1,
                ]);

                /*
                |--------------------------------------------------------------------------
                | 9. Vérifier les leçons
                |--------------------------------------------------------------------------
                */

                if (
                    !isset($chapterData['lessons']) ||
                    !is_array($chapterData['lessons']) ||
                    empty($chapterData['lessons'])
                ) {
                    throw new \Exception(
                        "Le chapitre « {$chapterData['title']} » doit contenir au moins une leçon."
                    );
                }

                /*
                |--------------------------------------------------------------------------
                | 10. Création des leçons
                |--------------------------------------------------------------------------
                */

                foreach (
                    $chapterData['lessons']
                    as $lessonIndex => $lessonData
                ) {

                    /*
                    |--------------------------------------------------------------------------
                    | Vérifier le titre de la leçon
                    |--------------------------------------------------------------------------
                    */

                    if (
                        !isset($lessonData['title']) ||
                        trim($lessonData['title']) === ''
                    ) {
                        throw new \Exception(
                            "Le titre d'une leçon du chapitre « {$chapterData['title']} » est obligatoire."
                        );
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | Vérifier video_index
                    |--------------------------------------------------------------------------
                    */

                    if (
                        !isset($lessonData['video_index']) ||
                        $lessonData['video_index'] === null ||
                        $lessonData['video_index'] === ''
                    ) {
                        throw new \Exception(
                            "La vidéo de la leçon « {$lessonData['title']} » est obligatoire."
                        );
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | Récupérer l'index de la vidéo
                    |--------------------------------------------------------------------------
                    */

                    $videoIndex = (int) $lessonData['video_index'];

                    /*
                    |--------------------------------------------------------------------------
                    | Vérifier que le fichier existe
                    |--------------------------------------------------------------------------
                    */

                    if (!isset($lessonVideos[$videoIndex])) {
                        throw new \Exception(
                            "La vidéo de la leçon « {$lessonData['title']} » est introuvable."
                        );
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | Récupérer le fichier vidéo
                    |--------------------------------------------------------------------------
                    */

                    $videoFile = $lessonVideos[$videoIndex];

                    /*
                    |--------------------------------------------------------------------------
                    | Vérification supplémentaire
                    |--------------------------------------------------------------------------
                    */

                    if (!$videoFile->isValid()) {
                        throw new \Exception(
                            "La vidéo de la leçon « {$lessonData['title']} » est invalide."
                        );
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | Upload de la vidéo vers MinIO
                    |--------------------------------------------------------------------------
                    */

                    $videoPath = $this->minio->upload(
                        $videoFile,
                        'lessons/videos'
                    );

                    /*
                     * On mémorise le chemin pour pouvoir
                     * supprimer le fichier en cas d'erreur.
                     */
                    $uploadedFiles[] = $videoPath;

                    /*
                    |--------------------------------------------------------------------------
                    | Création de la leçon
                    |--------------------------------------------------------------------------
                    */

                    Lesson::create([
                        'chapiter_id' => $chapiter->id,

                        'title' => $lessonData['title'],

                        'content' => $lessonData['content'] ?? null,

                        'video_url' => $videoPath,

                        'order' => $lessonIndex + 1,
                    ]);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | 11. Valider la transaction
            |--------------------------------------------------------------------------
            */

            DB::commit();

            /*
            |--------------------------------------------------------------------------
            | 12. Nettoyer la session du wizard
            |--------------------------------------------------------------------------
            */

            session()->forget('course_wizard_data');

            /*
            |--------------------------------------------------------------------------
            | 13. Réponse JSON
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => true,

                'message' => 'Cours créé avec succès !',

                'course_id' => $course->id,

                'redirect' => route('courses.index'),
            ], 201);

        } catch (\Throwable $e) {

            /*
            |--------------------------------------------------------------------------
            | 14. Annuler toutes les opérations SQL
            |--------------------------------------------------------------------------
            */

            DB::rollBack();

            /*
            |--------------------------------------------------------------------------
            | 15. Supprimer les fichiers MinIO déjà envoyés
            |--------------------------------------------------------------------------
            */

            foreach ($uploadedFiles as $file) {

                try {

                    $this->minio->delete($file);

                } catch (\Throwable $deleteException) {

                    /*
                     * On ne remplace pas l'erreur principale
                     * par une erreur de suppression.
                     */
                }
            }

            /*
            |--------------------------------------------------------------------------
            | 16. Retourner l'erreur
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => false,

                'message' => 'Erreur lors de la création du cours.',

                'error' => $e->getMessage(),

            ], 500);
        }
    }
}
