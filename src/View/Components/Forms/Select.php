<?php

namespace Jpmurray\GoneWithTheWind\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $items;
    public $chosen;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($choices, $chosen = false)
    {
        $this->items = $choices;
        $this->chosen = $chosen;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gone-with-the-wind::forms.select');
    }
}
