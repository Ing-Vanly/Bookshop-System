@extends('backend.layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Edit Order Item</h3>
    <form action="{{ route('orderitem.update', $orderItem->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $orderItem->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $orderItem->price }}" required>
        </div>
        <div class="form-group">
            <label for="subtotal">Subtotal</label>
            <input type="number" name="subtotal" class="form-control" value="{{ $orderItem->subtotal }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Item</button>
    </form>
</div>
@endsection
