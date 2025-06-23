<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Ahome()
    {
        return view('Admin.home');
    }
public function search(Request $request)
{
   
    $searchTerm = $request->input('query');

    $products = Product::where('name', 'like', '%' . $searchTerm . '%')
        ->orWhere('description', 'like', '%' . $searchTerm . '%')
        ->get();

    if ($products->isEmpty()) {
        return redirect()->back()->with('error', 'No products found matching your search.');
    }
    return view('Admin.search_results', compact('products'));
}
}
