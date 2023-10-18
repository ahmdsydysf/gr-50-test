<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return redirect('testProduct')->with('msg', 'this is from test controller');
        // return redirect()->away('http://www.google.com');
        //


        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store in database
        return redirect()->route('testProduct.index');
        // return to_route('testProduct.index', ['id'=>5,'name'=>'ahmed']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('products.delete')->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update

        return redirect('testProduct');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete from database and return index view
        return redirect()->route('testProduct.index');
    }
}
