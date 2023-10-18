<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SomayaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {


        // $value = $request->session()->pull('myname', 'sayed');
        // $request->session()->increment('count', $incrementBy = 10);
        //Session::increment('count', 10);
        // dd($request->session()->all());
        $request->session()->flash('status', 'user added success');
        //($request->session()->all());


        return  view('profile');
    }
}
