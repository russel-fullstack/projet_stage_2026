<?php

namespace App\View\Components\Admin\Chapters;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class CoursePreview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array|Collection $chapters=[],
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.chapters.course-preview');
    }
}
