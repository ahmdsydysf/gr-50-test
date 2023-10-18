<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function we()
    {

        return view('profile');
    }
}
