<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class MinioService
{

     public function upload( string $file, string $folder): string
    {
        return Storage::disk('s3')
            ->putFile(
                $folder,
                $file
            );
    }


    /**
     * Supprimer un fichier depuis MinIO
     */
    public function delete(?string $path): bool
    {
        if (!$path) {
            return false;
        }

        return Storage::disk('s3')
            ->delete($path);
    }


    /**
     * Générer une URL publique
     */
    public function url(string $path): string
    {
        return Storage::disk('s3')
            ->url($path);
    }


    /**
     * Générer une URL temporaire sécurisée
     */
    public function temporaryUrl(
        string $path,
        int $minutes = 60
    ): string {

        return Storage::disk('s3')
            ->temporaryUrl(
                $path,
                now()->addMinutes($minutes)
            );
    }


    /**
     * Vérifier l'existence d'un fichier
     */
    public function exists(string $path): bool
    {
        return Storage::disk('s3')
            ->exists($path);
    }
}
