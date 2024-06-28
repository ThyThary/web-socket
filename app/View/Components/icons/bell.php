<?php

namespace App\View\Components\icons;

use Illuminate\View\Component;

class bell extends Component
{
    public $id, $class, $viewBox, $fill, $strokeWidth;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id='', $class='', $viewBox='', $fill='', $strokeWidth='')
    {
        $this->id = $id;
        $this->class = $class;
        $this->viewBox = $viewBox;
        $this->fill = $fill;
        $this->strokeWidth = $strokeWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icons.bell');
    }
}
