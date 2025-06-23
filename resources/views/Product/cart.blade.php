@extends('layouts.user_layout')

@section('cart')
<div class="container mt-4">
    <h3>Your Cart</h3>

    @php 
        $cart = session('cart', []);
        $total = 0;
    @endphp

    @if(!empty($cart))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    @php $total += $item['price'] * $item['quantity']; @endphp
                    <tr>
                        <td><img src="{{ asset('images/' . $item['image']) }}" width="80"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>Rs {{ $item['price'] }}</td>
                        <td class="d-flex align-items-center">
                            <form action="{{ route('cart.update', $id) }}" method="POST" class="me-1">
                                @csrf
                                <input type="hidden" name="action" value="decrease">
                                <button type="submit" class="btn btn-sm btn-secondary">−</button>
                            </form>
                            <span class="mx-2">{{ $item['quantity'] }}</span>
                            <form action="{{ route('cart.update', $id) }}" method="POST" class="ms-1">
                                @csrf
                                <input type="hidden" name="action" value="increase">
                                <button type="submit" class="btn btn-sm btn-secondary">+</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="3" class="text-end"><strong>Total:</strong></td>
                    <td colspan="3"><strong>Rs {{ $total }}</strong></td>
                </tr>
            </tbody>
        </table>

        {{-- Checkout Form --}}
        <form action="{{ route('order.place') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label><strong>Your Name:</strong></label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label><strong>Your Address:</strong></label>
                <textarea name="address" class="form-control" required></textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success">Checkout</button>
            </div>
        </form>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
