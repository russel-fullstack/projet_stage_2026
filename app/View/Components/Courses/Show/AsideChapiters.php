<?php

namespace App\View\Components\Courses\Show;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AsideChapiters extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $percentComplete = 75,
        public int $completedLessons = 18,
        public int $totalLessons = 24,
        public array $chapters = []
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses.show.aside-chapiters');
    }
}
