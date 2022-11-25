<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class StepperForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public readonly string $id,
        public readonly string $action,
        public readonly array $classes = []
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
        return view('components.form.stepper-form');
    }
}
