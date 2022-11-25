<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $field,
        public readonly string $type = "text",
        public readonly string $label = "",
        public readonly string $value = "",
        public readonly string $placeholder = "",
        public readonly string $description = "",
        public readonly bool $disabled = false,
        public readonly bool $required = false,
        public readonly bool $autocomplete = true,
        public readonly bool $hidden = false,
        public readonly string $mask = "",
        public readonly bool $reverse = false,
        public readonly bool $price = false,
        public readonly bool $percentage = false,
        public readonly int $maxlength = 0
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
        return view('components.form.input');
    }
}
