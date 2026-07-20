<?php

namespace App\View\Components\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * Create a new component instance.
     */
    private const COLORS = [
    'gray' => 'bg-gray-100 text-gray-700 border-2 border-gray-200',
    'green' => 'bg-green-100 text-green-700 border-2 border-green-200',
    'amber' => 'bg-amber-100 text-amber-700 border-2 border-amber-200',
    'blue' => 'bg-blue-100 text-blue-700 border-2 border-blue-200',
    'red' => 'bg-red-100 text-red-700 border-2 border-red-200',
    'purple' => 'bg-purple-100 text-purple-700 border-2 border-purple-200',
    'black' => 'bg-black text-white',
];

    public readonly string $cls;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $color = 'gray',
    )
    {
        $this->cls = self::COLORS[$color] ?? self::COLORS['gray'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.badge');
    }
}
