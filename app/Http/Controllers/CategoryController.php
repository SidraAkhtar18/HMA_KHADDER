<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Product.category');
    }
    public function categorystore(Request $request)
    {      
        $category = new Category();
        $category->name = $request->category;
        $category->save();
        return redirect()->back()->with('success', 'Category added successfully!'); 
    }
}
