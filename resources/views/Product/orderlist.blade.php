@extends('layouts.admin_layout')

@section('orderlist')
<div class="container mt-4">
    <h3 class="mb-4">📝 All Orders</h3>

   
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Total (Rs)</th>
                    <th>Cart Items</th>
                    <th>Placed At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $index => $order)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <ul>
                            @foreach(json_decode($order->cart_items, true) as $item)
                                <li>{{ $item['name'] }} x {{ $item['quantity'] }} = Rs {{ $item['price'] * $item['quantity'] }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y, h:i A') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
</div>
@endsection
