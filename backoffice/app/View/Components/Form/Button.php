<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Button extends Component
{
    public string $finalId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public readonly string $type = "submit",
        public readonly string $class = "btn btn-primary w-100",
        public readonly string $placeholder = "",
        public readonly string $id = "",
        public readonly string $url = "",
        public readonly array $modal = [],
        public readonly array $tooltip = [],
        public readonly bool $disabled = false
        ){
        $this->finalId = !empty($id) ? $id : md5(uniqid(rand(), true));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
