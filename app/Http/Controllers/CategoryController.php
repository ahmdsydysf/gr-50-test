<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data = Category::findOrFail(15);

        $data = Category::when($request->search, function ($query, $value) use ($request) {
            if($request->cat_select == '*') {
                $query->where('name', 'like', "%$value%")
                    ->orWhere('cat_code', 'like', "%$value%")
                    ->orWhere('cat_desc', 'like', "%$value%");
            } else {
                $query->where("$request->cat_select", 'like', "%$value%");
            }
        })->get();

        return view('categories.allCategory')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5'
        ]);

        // $category = new Category();

        // $category->name = $request->name;
        // $category->cat_desc = $request->post('cat_desc');
        // $category->cat_code = $request->input('cat_code');
        // $category->status = $request->status;

        // $category->save();

        // Category::create([
        //     'name' => $request->name,
        //     'cat_desc' => $request->cat_desc,
        //     'cat_code' => $request->cat_code,
        //     'status' => $request->status,
        // ]);

        Category::create($request->all());//
        // $cat = new Category($request->all());//
        // $cat->save();

        // Session::put('myname', 'ahmed sayed');
        return redirect()->route('category.index')->with('MsgStatus', 'category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.editCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:5'
        ]);


        $category->name = $request->name ;
        $category->cat_desc = $request->cat_desc ;
        $category->cat_code = $request->cat_code ;
        $category->save();

        // $category->update($request->all());
        return redirect()->route('category.index')->with('MsgStatus', 'category updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // dd($category);
        // $cat = Category::find($id);
        // $cat = Category::where('id' ,  $id)->delete();
        $category->delete();
        return redirect()->route('category.index')->with('MsgStatus', 'category deleted successfully');


    }
}
