<?php

namespace App\View\Components\Users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LessonItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public ?string $duration = null,
        public string $status = 'default', // 'completed', 'in_progress', 'default'
        public bool $isExercise = false
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.lesson-item');
    }
}
