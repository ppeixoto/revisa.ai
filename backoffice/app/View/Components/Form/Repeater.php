<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Repeater extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $id,
        public readonly bool $initEmpty = false,
        public readonly bool $isFirstItemUndeletable = true,
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
        return view('components.form.repeater');
    }
}
