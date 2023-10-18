<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return
        <<<'blade'
            <div>
                <!-- $varname The only way to do great work is to love what you do. - Steve Jobs -->
            </div>
        blade;
    }
}
