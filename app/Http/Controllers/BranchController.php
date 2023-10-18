<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $q = DB::table('employees')->skip(10)->take(5)->dumpRawSql();
        //$q = DB::table('employees')->offset(10)
        // ->limit(5)
        // ->get();
        // ;

        // $datacount = DB::table('branches')->count();
        // $data = DB::table('branches')->select(['name as myName' , 'id'])->get();
        // $data = DB::table('branches')->where('name', 'Ahmed')->get(['name as myName' , 'id']);
        //$data = DB::table('branches')->where('id', '>', '5')->first();
        // $data = DB::table('branches')->get(['name as myName' , 'id']);
        //dd($data);

        //$data = DB::table('branches')->max('price');
        // $data = DB::table('branches')->where('id', 2)->value('price');
        // $newObj = new stdClass();
        // $newObj->name = "mahmooooud";
        // dd($newObj);
        // $data = DB::table('branches')->where('name', 'ahmed')->where('id', '>', '2')->first();
        // dd($data);
        // $data1 = DB::table('branches')->where('id', '>', 2)->get('price');
        // $data = DB::table('branches')->where('id', '>=', 1)->get();
        // $data = DB::table('branches')->distinct()->get();
        //$data = DB::table('branches')->where('id', '>', 2)->value('price');

        $query = DB::table('branches')->select(['name' , 'price']);
        $data = $query->get();
        $data2 = $query->addSelect('id')->get();

        $orders = DB::table('branches')
        ->selectRaw('price * ? + ? as price_with_tax , CONCAT(name , ?) as myname ', [1.0825 , 100 , 66])
        ->get();

        dd($orders);
        return view('branches.all', compact('data', 'orders'));// 1   ahmed
        // return view('branches.all', ['allData' => $data]);
        // return view('branches.all', get_defined_vars());
        // return view('branches.all' )->with('myData' , $data);

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
