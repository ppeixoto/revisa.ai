<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputSpinner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $field,
        public readonly string $label = "",
        public readonly string $hour = "0",
        public readonly string $minute = "0",
        public readonly string $minHour = "0",
        public readonly string $maxHour = "12",
        public readonly string $description = "",
        public readonly bool $required = false,
        public readonly bool $hidden = false,
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
        return view('components.form.input-spinner');
    }
}
