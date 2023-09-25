<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;

        $icon = $request->icon;
        if($icon){
            $iconName = 'category'.rand().time().'.'.$icon->extension();
            $icon->move('database/category-images/',$iconName);
            $category->icon = 'database/category-images/'.$iconName;
        }

        $category->save();
        Toastr::success('Category Added Successfully');
        return back();
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
        $category = Category::find($id);
        return view('backend.category.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;

        $icon = $request->icon; 
        if($icon){
            if(file_exists($category->icon)){
                unlink($category->icon);
            }

                $iconName = 'category'.rand().time().'.'.$icon->extension();
                $icon->move('database/category-images/',$iconName);
                $category->icon = 'database/category-images/'.$iconName;
            
            
        }

        $category->save();
        Toastr::success('Category Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if(file_exists($category->icon)){
            unlink($category->icon);
        }
        $category->delete();
        Toastr::success('Category Deleted Successfully');
        return back();
    }
}
