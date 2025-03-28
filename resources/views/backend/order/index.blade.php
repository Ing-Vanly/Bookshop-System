@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Page Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Flash Messages -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
                showSuccessToast("{{ session('success') }}");
            @endif
            @if (session('error'))
                showErrorToast("{{ session('error') }}");
            @endif
        });
    </script>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- Add Order Button -->
                    <div class="d-flex justify-content-end mb-2">
                        <a href="{{ route('order.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add New Order
                        </a>
                    </div>

                    <!-- Orders Table -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Order Management</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Books</th>
                                        <th>Order Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Payment</th>
                                        <th>Shipping Address</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->customer_name }}</td>
                                            <td>{{ $order->customer_contact ?? '-' }}</td>
                                            <td>{{ $order->email ?? '-' }}</td>
                                            <td>
                                                @foreach ($order->items as $item)
                                                    <div>{{ $item->book->title }} (x{{ $item->quantity }})</div>
                                                @endforeach
                                            </td>
                                            <td>{{ $order->order_date }}</td>
                                            <td>${{ number_format($order->total_amount, 2) }}</td>
                                            <td>{{ ucfirst($order->order_status) }}</td>
                                            <td>{{ ucfirst($order->payment_status) }}</td>
                                            <td>{{ $order->shipping_address }}</td>
                                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('order.show', $order->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <a href="{{ route('order.edit', $order->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="d-inline">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this order?')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="12" class="text-center">No orders found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
