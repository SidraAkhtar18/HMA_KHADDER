<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $cart = session('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $order = new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->cart_items = json_encode($cart);
        $order->total = $total;
        $order->save();
        session()->forget('cart');
        return redirect()->route('order.confirmed')->with('success', 'Order placed successfully!');
    }
 public function orderlist()
    {
        $order = Order::all();
        return view('Product.orderlist', compact('order'));
    }
}

