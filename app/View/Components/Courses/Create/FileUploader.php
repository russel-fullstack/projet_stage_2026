<?php

namespace App\View\Components\Courses\Create;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileUploader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = 'thumbnail',
        public string $label = 'Vignette du cours',
        public string $hint = 'PNG, JPG ou WEBP (Max. 5Mo, Recommandé 1280×720)'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.create.file-uploader');
    }
}
