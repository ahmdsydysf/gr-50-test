<?php

namespace App\ViewComposer;

use Illuminate\View\View;

class ViewComposertt
{
    /**
     * Create a new profile composer.
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('myglobaladdress', 'alex');
    }
}
