<?php

namespace App\View\Components\Courses;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class CourseTabs extends Component
{
    /**
     * Create a new component instance.
     */


    public function __construct(
        public string $description='',
        public array|Collection $objectives=[],
        public array|Collection $resources=[]
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.show.course-tabs');
    }
}
