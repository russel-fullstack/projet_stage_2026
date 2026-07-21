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
        public string $poster='https://images.unsplash.com/photo-1633356122544-f134324a6cee?q=80&w=1600&auto=format&fit=crop',
        public string $src='https://cdn.coverr.co/videos/coverr-developer-coding-in-vs-code-4601/1080p.mp4'
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
