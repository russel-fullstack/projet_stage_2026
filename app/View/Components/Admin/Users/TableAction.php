<?php

namespace App\View\Components\Admin\Users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableAction extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'edit',
        public string $status = 'active'
    ) {}

    /**
     * Vérifie si le statut est suspendu / banni.
     */
    public function isBanned(): bool
    {
        return $this->status === 'banned';
    }

    /**
     * Retourne le titre contextuel du bouton suspendre/réactiver.
     */
    public function getTitle(): string
    {
        if ($this->type === 'edit') return 'Modifier';
        if ($this->type === 'delete') return 'Supprimer';

        return $this->isBanned() ? 'Réactiver' : 'Suspendre';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.users.table-action');
    }
}
