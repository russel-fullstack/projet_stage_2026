<?php

namespace App\View\Components\Users\Suggestions;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LevelSelector extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $selected = 'Intermédiaire',
        public array $levels = ['Débutant', 'Intermédiaire', 'Avancé']
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.suggestions.level-selector');
    }
}
