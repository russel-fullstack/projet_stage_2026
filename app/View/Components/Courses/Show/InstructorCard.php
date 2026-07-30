<?php

namespace App\View\Components\Courses\Show;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class InstructorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public ?User $admin = null;
    public bool $isStudent = false;

    public function __construct()
    {
        $currentUser = Auth::user();

        // Vérifier si l'utilisateur connecté est un étudiant
        if ($currentUser && $currentUser->role === 'user') {
            $this->isStudent = true;
            
            // Récupérer le premier administrateur enregistré
            $this->admin = User::where('role', 'admin')->first();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.show.instructor-card');
    }
}
