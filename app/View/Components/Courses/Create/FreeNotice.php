<?php

namespace App\View\Components\Courses\Create;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FreeNotice extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Cours gratuit',
        public string $description = 'Tous les cours sur EduMaster sont actuellement gratuits pour favoriser l\'apprentissage universel.'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.create.free-notice');
    }
}
