<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Ahome()
    {
        return view('Admin.home');
    }

    public function search(Request $request)
{
    $query = trim($request->input('query'));

    // Case 1: Empty query — return the view with just the message
    if (empty($query)) {
        return view('Admin.search_results', [
            'products' => [],
            'query' => '',
            'oops' => 'Please enter a search query.'
        ]);
    }
    // Case 2: Search by product name
    $products = Product::where('name', 'LIKE', "%$query%")->get();

    // Case 3: No products found
    if ($products->isEmpty()) {
        return view('Admin.search_results', [
            'products' => [],
            'query' => $query,
            'oops' => 'No product found for "' . $query . '".'
        ]);
    }
    // Case 4: Products found
    return view('Admin.search_results', compact('products', 'query'));
}
public function profile()
{
    $admin = auth()->user(); // logged-in user (admin)
    return view('Admin.profile', compact('admin'));
}

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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
