<?php

namespace App\View\Components\Users\Suggestions;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderBanner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $badge = 'Co-création',
        public string $title = "Votre avis façonne l'avenir d'EduMaster.",
        public string $description = "Vous ne trouvez pas la compétence exacte que vous cherchez ? Notre communauté est le moteur de notre catalogue. Suggérez le prochain cours magistral et aidez-nous à construire l'expérience d'apprentissage ultime."
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.suggestions.header-banner');
    }
}
