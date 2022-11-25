<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class StepperNavItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $number,
        public readonly string $title,
        public readonly string $description = "",
        public readonly  bool $current = false,
        public readonly bool $vertical = false
    ){
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.stepper-nav-item');
    }
}
