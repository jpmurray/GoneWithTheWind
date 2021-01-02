<?php

namespace Jpmurray\GoneWithTheWind\View\Components\Cards;

use Illuminate\View\Component;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class Table extends Component
{
    public $model_name; // Model name.
    public $class_name; // Model name with an ucfirst, in case we want to call the class.
    public $route_prefix; // Model name with an s, to generate routes from route name.
    public $items; // the data to display
    public $show; // Array to decided which index to display and corresponding table headers
    public $actions; // Array of possible actions to do on each items: ['edit']
    public $paginated;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, $data, $show, $actions = null)
    {
        $this->model_name = $model;
        $this->class_name = ucfirst($this->model_name);
        $this->route_prefix = "{$this->model_name}s";

        $this->items = $data;
        $this->show = $show;
        $this->actions = $actions;

        $this->paginated = $this->isDataPaginated();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('gone-with-the-wind::cards.table');
    }

    private function isDataPaginated()
    {
        if ($this->items instanceof Paginator || $this->items instanceof LengthAwarePaginator) {
            return true;
        }

        return false;
    }
}
