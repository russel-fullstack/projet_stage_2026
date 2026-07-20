<?php

namespace App\View\Components\Pages;

use App\Models\Course;
use App\Models\Specialty;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularCourses extends Component
{
    /**
     * Create a new component instance.
     */

    public $courses;

    public function __construct()
    {
        $this->courses = Course::with('specialty')
            ->latest()
            ->paginate(3);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.popular-courses');
    }
}
