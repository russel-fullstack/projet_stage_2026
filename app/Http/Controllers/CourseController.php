<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
    $courses = [
        [
            'title' => 'Maîtrise de la Data Science & ML',
            'description' => 'Apprenez les fondamentaux du machine learning et de l\'analyse de données avec Python.',
            'category' => 'DATA',
            'category_color' => 'bg-indigo-100 text-indigo-700',
            'level' => 'AVANCÉ',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '45 heures',
            'students' => '12.4k inscrits',
            'price' => 'Gratuit',
            'badge' => 'BESTSELLER',
            'badge_color' => 'bg-[#002266] text-white',
            'image' => 'https://images.unsplash.com/photo-1527474305487-b87b222841cc?q=80&w=600&auto=format&fit=crop'
        ],
        [
            'title' => 'Stratégie Marketing Digital 2024',
            'description' => 'Découvrez les dernières tendances en SEO, social media et publicité payante.',
            'category' => 'BUSINESS',
            'category_color' => 'bg-purple-100 text-purple-700',
            'level' => 'DÉBUTANT',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '28 heures',
            'students' => '8.2k inscrits',
            'price' => 'Gratuit',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop'
        ],
        [
            'title' => 'UI/UX Design: De Zéro à Pro',
            'description' => 'Maîtrisez Figma et les principes fondamentaux du design centré sur l\'utilisateur.',
            'category' => 'DESIGN',
            'category_color' => 'bg-blue-100 text-blue-700',
            'level' => 'INTERMÉDIAIRE',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '32 heures',
            'students' => '5.1k inscrits',
            'price' => 'Gratuit',
            'badge' => 'NOUVEAU',
            'badge_color' => 'bg-blue-800 text-white',
            'image' => 'https://images.unsplash.com/photo-1581291518655-9523c932dedf?q=80&w=600&auto=format&fit=crop'
        ],
         [
            'title' => 'UI/UX Design: De Zéro à Pro',
            'description' => 'Maîtrisez Figma et les principes fondamentaux du design centré sur l\'utilisateur.',
            'category' => 'DESIGN',
            'category_color' => 'bg-blue-100 text-blue-700',
            'level' => 'INTERMÉDIAIRE',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '32 heures',
            'students' => '5.1k inscrits',
            'price' => 'Gratuit',
            'badge' => 'NOUVEAU',
            'badge_color' => 'bg-blue-800 text-white',
            'image' => 'https://images.unsplash.com/photo-1581291518655-9523c932dedf?q=80&w=600&auto=format&fit=crop'
        ],
         [
            'title' => 'Stratégie Marketing Digital 2024',
            'description' => 'Découvrez les dernières tendances en SEO, social media et publicité payante.',
            'category' => 'BUSINESS',
            'category_color' => 'bg-purple-100 text-purple-700',
            'level' => 'DÉBUTANT',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '28 heures',
            'students' => '8.2k inscrits',
            'price' => 'Gratuit',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop'
        ],
    ];
        return view('courses.courses-index', compact('courses'));
    }

    public function create()
    {
        return view('courses.courses-create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
