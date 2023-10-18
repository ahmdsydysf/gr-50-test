<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    // public $message;
    // public $clr;
    // public $title;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $message = 'default msg', public string $title = 'def Title', public string $clr = 'def Clr')
    {
        $this->message = $message ;
        $this->clr = $clr ;
        $this->title = $title ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
