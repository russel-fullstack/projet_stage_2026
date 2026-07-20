<?php

namespace App\View\Components\Users\Certifications;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MotivationBanner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Continuez ainsi !',
        public string $text = 'Vous êtes dans le top 5% des étudiants les plus actifs ce mois-ci.'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.certifications.motivation-banner');
    }
}
