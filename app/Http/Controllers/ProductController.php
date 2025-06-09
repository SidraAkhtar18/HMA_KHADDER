<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $categories = Category::all(); // for dropdown in form// get products with category name
    return view('Product.addproduct', compact('categories'));
}

    public function productlist()
    {
        $products = Product::all();
        return view('product.productlist', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
 public function productstore(Request $request)
{
   
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->available =$request->available ;
    $product->category_id = $request->choose;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename); // Save to public/images
        $product->image = $filename;
    }
    else {
        $product->image = null; // Handle case where no image is uploaded
    }

    $product->save();

    return redirect()->back()->with('success', 'Product added successfully!');
}
    public function edit(Product $product , Request $request)
    {
        $product= $request->edit;
        $EditProduct = Product::find($product);
        if ($EditProduct) {
            return view('Product.updateproduct', compact('EditProduct'));
        }
        else {
            return redirect()->route('product.list')->with('error', 'Product not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = $request->update;
        $UpdateProduct = Product::find($product);
        if ($UpdateProduct) {
            $UpdateProduct->name = $request->name;
            $UpdateProduct->price = $request->price;
            $UpdateProduct->description = $request->description;
            $UpdateProduct->available = $request->available;
          
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $filename); // Save to public/images
                $UpdateProduct->image = $filename;
            }
            else {
                // If no new image is uploaded, keep the existing one
                $UpdateProduct->image = $UpdateProduct->image;
            }
            $UpdateProduct->update();
            return redirect()->route('product.list')->with('success', 'Product updated successfully');
        } else {
            return redirect()->route('product.list')->with('error', 'Product not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, Request $request)
    {

        $product= $request->delete;
        $DeleteProduct = Product::find( $product );
        if ($DeleteProduct)
        {
            $DeleteProduct->delete();
            return redirect()->route('product.list')->with('success', 'Product deleted successfully');
        }
        else
        {
            return redirect()->route('product.list')->with('error', 'Product not found');
        }

    }
}
