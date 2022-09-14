<?php

namespace App\View\Components\Contacts;

use Illuminate\View\Component;

class ContactInfoComponent extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $title, $detail)
    {
        $this->icon = $icon;
        $this->title = strtoupper($title);
        $this->detail = ucwords($detail);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contacts.contact-info-component');
    }
}
