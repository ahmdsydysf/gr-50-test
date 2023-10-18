<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TestClassCompo extends Component
{
    public $user ;
    /**
     * Create a new component instance.
     */
    public function __construct($user)
    {
        $this->user = $user ;
    }

    public function limitition($user, $limit = 5)
    {
        return Str::limit($user, $limit);
        //return Str::upper($x);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test-class-compo');
    }
}
