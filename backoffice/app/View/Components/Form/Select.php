<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $field,    
        public readonly string $label = "",
        public readonly string $description = "",
        public readonly array $options = [],
        public readonly int $selected = 0,
        public readonly bool $disabled = false,
        public readonly bool $readonly = false,
        public readonly bool $required = false,
        public readonly bool $multiple = false,
        public readonly bool $hidden = false,
        public readonly bool $search = false,
        public readonly bool $autocomplete = false,
        public readonly bool $repeater = false,
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
        return view('components.form.select');
    }
}
