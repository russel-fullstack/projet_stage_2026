<?php

namespace App\View\Components\Quiz;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Progress extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $current = 1,
        public int $total = 10,
        public int $percentage = 0
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quiz.progress');
    }
}
