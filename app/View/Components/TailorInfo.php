<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TailorInfo extends Component
{
    public string $field_name;
    public string $field_value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct ($name, $value)
    {
        $this->field_name = $name;
        $this->field_value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tailor-info');
    }
}
