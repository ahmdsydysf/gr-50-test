<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppOfHome extends Component
{
    public $pager_title;
    public $cl;
    /**
     * Create a new component instance.
     */
    public function __construct($pager_title = 'nnnnno tttttilte', $cl)
    {
        $this->pager_title = $pager_title;
        $this->cl = $cl;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-of-home');
    }
}
