<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LayananKami extends Component
{
    public $number;
    public $name = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($number, $name)
    {
        $this->number = $number;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layanan-kami');
    }
}
