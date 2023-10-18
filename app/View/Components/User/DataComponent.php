<?php

namespace App\View\Components\User;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DataComponent extends Component
{
    public $user ;
    /**
     * Create a new component instance.
     */
    public function __construct($user)
    {
        $this->user = $user ;
    }
    public function limitiation($user, $limit = 2)
    {
        return Str::limit($user, $limit);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.data-component');
    }
}
