<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Radio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $field,    
        public readonly string $label = "",
        public readonly string $value = "",
        public readonly bool $checked = false,
        public readonly bool $inline = true
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.radio');
    }
}
