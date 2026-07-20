<?php

namespace App\View\Components\Courses\Create;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RichTextEditor extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = 'detailed_description',
        public string $label = 'Description détaillée du programme',
        public string $placeholder = 'Détaillez le contenu, les objectifs pédagogiques et les prérequis de votre formation...',
        public ?string $value = null
    ) {}
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.create.rich-text-editor');
    }
}
