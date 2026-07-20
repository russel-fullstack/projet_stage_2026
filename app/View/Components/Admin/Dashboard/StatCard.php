<?php

namespace App\View\Components\Admin\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string|int $value = 0,
        public ?string $trend = null,
        public string $trendColor = 'text-emerald-500',
        public string $iconColor = 'bg-indigo-50 text-indigo-600'
    ) {}
    public function hasTrend(): bool
    {
        return !empty($this->trend);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.dashboard.stat-card');
    }
}
