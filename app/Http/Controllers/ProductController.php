<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
    {
        $categories = Category::all();
        return view('Product.addproduct', compact('categories'));
    }
    public function productlist()
    {
        $products = Product::all();
        return view('product.productlist', compact('products'));
    }
 public function productstore(Request $request)
{
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->available =$request->available ;
    $product->category_id = $request->choose;
    $product->quantity = $request->quantity;
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
             $UpdateProduct->quantity = $request->quantity;

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

    public function ShowCategory(Request $request, $category_id)
{

    $products = Product::where('category_id', $category_id)->get();
    
    if ($category_id == 1) {
        return view('user.productshowbycatogory1', compact('products'));
    } elseif ($category_id == 2) {
        return view('user.productshowbycatogory2', compact('products'));
    } elseif ($category_id == 3) {
        return view('user.summercollection', compact('products'));
    } elseif ($category_id == 4) {
        return view('user.wintercollection', compact('products'));
    }
    elseif ($category_id == 5) {
        return view('user.plainkhadder', compact('products'));
    }else {
        return redirect()->back();
    }
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
    return view('user.search_results', compact('products'));
}
public function showproductdetails($id)
    {
        $product = Product::findOrFail($id);
        return view('Product.productdetails', compact('product'));
    }
}
