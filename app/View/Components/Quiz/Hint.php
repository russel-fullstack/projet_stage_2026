<?php

namespace App\View\Components\Quiz;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hint extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "Besoin d'un indice ?",
        public string $description = '',
        public string $linkText = 'Voir la leçon',
        public string $linkUrl = '#'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quiz.hint');
    }
}
