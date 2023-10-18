<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BtnButton extends Component
{
    public $btnName;
    /**
     * Create a new component instance.
     */
    public function __construct($btnName)
    {
        $this->btnName = $btnName ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.btn-button');
    }
}
