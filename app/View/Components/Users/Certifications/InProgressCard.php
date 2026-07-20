<?php

namespace App\View\Components\Users\Certifications;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InProgressCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public int|string $percentage = 0,
        public array $criteria = [],
        public string $actionText = 'Continuer le cours',
        public string $actionUrl = '#'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.certifications.in-progress-card');
    }
}
