<?php

namespace App\View\Components\Users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseProgress extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string $subtitle = '',
        public int|string $percentage = 0,
        public string $nextType = 'Quiz',
        public string $nextText = '',
        public string $color = '#002266',
        public string $badgeBg = 'bg-emerald-100',
        public string $badgeText = 'text-emerald-700'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.course-progress');
    }
}
