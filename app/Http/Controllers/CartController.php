<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        $cart[$id] = [
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'description' => $product->description,
            'quantity' => 1,
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product added to cart!');
    }

    public function showCart()
    {
        return view('Product.cart');
    }
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.show')->with('success', 'Product removed!');
    }
    public function updateQuantity(Request $request, $id)
{
    $cart = session()->get('cart');

    if ($cart && isset($cart[$id])) {
        if ($request->action === 'increase') {
            $cart[$id]['quantity'] += 1;
        } elseif ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity'] -= 1;
        }
        session()->put('cart', $cart);
    }

    return redirect()->route('cart.show');
}

}
