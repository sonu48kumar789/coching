<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $data['mainCategory'] = Category::where("parent_id",null)->get();
        $data['categories'] = Category::all();
        return view("admin.category",$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        $cat = new Category();
        if($request->parent_id != "null"){
            $cat->parent_id = $request->parent_id;
        }
        $cat->title = $request->title;
        $cat->description = $request->description;
        $cat->save();
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
