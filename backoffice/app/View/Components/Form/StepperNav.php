<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class StepperNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly bool $vertical = false
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.stepper-nav');
    }
}
