<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        return view('products.index')->with('msg', 'this is all products from index method');
    }

    public function create()
    {
        return view('products.add');
    }

    public function store(Request $request)
    {
        dd($request->url());
        $pName = $request->productname;
        $pPrice = $request->post('productprice');

        return redirect('products/all')->with(['product_name'=>$pName , 'product_price' => $pPrice]);
    }

    public function show($id)
    {
        return view('products.delete', compact('id'));
    }

    public function destroy($id)
    {
        return redirect('products/all');
    }
}
