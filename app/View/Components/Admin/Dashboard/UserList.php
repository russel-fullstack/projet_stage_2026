<?php

namespace App\View\Components\Admin\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class UserList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array|Collection $users = []
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.dashboard.user-list');
    }
}
