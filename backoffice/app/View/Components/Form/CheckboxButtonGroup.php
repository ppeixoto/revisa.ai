<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class CheckboxButtonGroup extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $field,
        public readonly string $label = "",
        public readonly array $options = [],
        public readonly string $description = "",
        public readonly bool $hidden = false,
        public readonly bool $required = false,
        public readonly bool $disabled = false,
        public readonly bool $checked = false,
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
        return view('components.form.checkbox-button-group');
    }
}
