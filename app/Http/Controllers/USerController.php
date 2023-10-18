<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class USerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = User::when($request->search, function ($query, $value) use ($request) {
            if($request->cat_select == '*') {
                $query->where('name', 'like', "%$value%")
                    ->orWhere('email', 'like', "%$value%")
                    ->orWhere('password', 'like', "%$value%");
            } else {
                $query->where("$request->cat_select", 'like', "%$value%");
            }
        })->get();

        return view('testusers.allUser')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testusers.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5'
        ]);



        User::create($request->all());//
        // $cat = new Category($request->all());//
        // $cat->save();

        // Session::put('myname', 'ahmed sayed');
        return redirect()->route('user.index')->with('MsgStatus', 'user added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
