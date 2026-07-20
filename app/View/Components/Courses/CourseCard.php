<?php

namespace App\View\Components\Courses;

use App\Models\Course;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $course;
    public function __construct(
        Course $course
    )
    {
       $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.course-card');
    }
}
