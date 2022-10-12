<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;

class Links extends Component
{
    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $link)
    {
        $this->link = $link;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.links');
    }
}
