<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public $pager_title;
    /**
     * Create a new component instance.
     */
    public function __construct($pager_title = 'nnnnno tttttilte')
    {
        $this->pager_title = $pager_title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app');
    }
}
