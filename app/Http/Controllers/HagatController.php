<?php

namespace App\Http\Controllers;

use App\Models\Hagat;
use Illuminate\Http\Request;

class HagatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        dd(Hagat::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hagat $hagat)
    {
        dd($hagat);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hagat $hagat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hagat $hagat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hagat $hagat)
    {
        //
    }
}
