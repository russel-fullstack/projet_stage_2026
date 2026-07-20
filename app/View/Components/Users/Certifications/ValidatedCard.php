<?php

namespace App\View\Components\Users\Certifications;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ValidatedCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string $level = 'Avancé',
        public string $deliveredAt = '',
        public string $certificateId = '',
        public ?string $imageUrl = null,
        public string $pdfUrl = '#',
        public string $shareUrl = '#'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.certifications.validated-card');
    }
}
