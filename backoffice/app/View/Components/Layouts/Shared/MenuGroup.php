<?php

namespace App\View\Components\Layouts\Shared;

use Illuminate\View\Component;

class MenuGroup extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $title,
        public readonly bool $active,
        public readonly string $icon
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.shared.menu-group');
    }
}
