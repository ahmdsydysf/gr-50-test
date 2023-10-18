<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allNews = DB::table('news')->get();
        return view('news.allNews', compact('allNews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.addNews');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:15',
        ]);

        $title = $request->title;
        $desc = $request->description;

        $newNewsId = DB::table('news')->insertGetId([
            'title' => $title ,
            'description' => $desc
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nw = DB::table('news')->find($id);

        return view('news.deleteNews', compact('nw'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nw = DB::table('news')->find($id);
        return view('news.editNews', compact('nw'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:15',
        ]);


        $title = $request->title;
        $desc = $request->description;


        DB::table('news')->where('id', $id)->update([
            'title' => $title ,
            'description' => $desc
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('news')->where('id', $id)->delete();

        return redirect()->route('news.index');
    }
}
