<?php

namespace App\View\Components\Courses\Show;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoPlayer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $poster='',
        public string $src=''
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.show.video-player');
    }
}
