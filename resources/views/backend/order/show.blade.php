@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Order Details</h1>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">Order Information</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Customer</th>
                                <td>{{ $order->customer->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $order->customer->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $order->customer->phone }}</td>
                            </tr>
                            <tr>
                                <th>Shipping Address</th>
                                <td>{{ $order->customer->address }}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{ $order->order_date }}</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{{ ucfirst($order->order_status) }}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{ ucfirst($order->payment_status) }}</td>
                            </tr>
                            <tr>
                                <th>Total Amount</th>
                                <td>${{ number_format($order->total_amount, 2) }}</td>
                            </tr>
                        </table>

                        <h3>Books Ordered</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Book</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->items as $item)
                                    <tr>
                                        <td>{{ $item->book->title }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>${{ number_format($item->quantity * $item->price, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
