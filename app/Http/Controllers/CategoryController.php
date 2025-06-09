<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Product.category');
    }

    
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function categorystore(Request $request)
    {      
        $category = new Category();
        $category->name = $request->category;
        $category->save();
        return redirect()->back()->with('success', 'Category added successfully!'); 
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
