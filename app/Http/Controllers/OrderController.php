<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

public function placeOrder(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:500',
    ]);
    $cart = session('cart', []);
    $total = 0;
    foreach ($cart as $id => $item) {
        $product = Product::find($id);

        if (!$product) {
            return back()->with('error', 'Product not found.');
        }

        // ❌ If requested quantity > available quantity → show error
        if ($item['quantity'] > $product->quantity) {
            return back()->with('error', 'Sorry! We only have ' . $product->quantity . ' item(s) available for "' . $product->name . '".');
        }

        // ✅ Subtract quantity and update availability
        $total += $item['price'] * $item['quantity'];
        $product->quantity -= $item['quantity'];
        $product->available = $product->quantity == 0 ? 'Out of Stock' : 'In Stock';
        $product->save();
    }

    // ✅ Store the order
    DB::table('orders')->insert([
        'name' => $request->name,
        'address' => $request->address,
        'cart_items' => json_encode($cart),
        'total' => $total,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    // ✅ Clear cart session
    session()->forget('cart');

    return redirect()->route('order.confirmed');
}
 public function orderlist()
    {
        $order = Order::all();
        return view('Product.orderlist', compact('order'));
    }
}

