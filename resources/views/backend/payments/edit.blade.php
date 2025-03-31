@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Payment</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('payments.index') }}">Payments</a></li>
                            <li class="breadcrumb-item active">Edit Payment</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Flash Message Display -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @if (session('success'))
                    showSuccessToast("{{ session('success') }}");
                @endif

                @if (session('error'))
                    showErrorToast("{{ session('error') }}");
                @endif
            });
        </script>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Payment</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('payments.update', $payment->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <!-- Order ID Field -->
                                    <div class="form-group">
                                        <label for="order_id">Order ID</label>
                                        <select class="form-control @error('order_id') is-invalid @enderror" id="order_id" name="order_id" required>
                                            <option value="">Select Order</option>
                                            @foreach ($orders as $order)
                                                <option value="{{ $order->id }}" {{ old('order_id', $payment->order_id) == $order->id ? 'selected' : '' }}>
                                                    Order #{{ $order->id }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('order_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Payment Method Field -->
                                    <div class="form-group">
                                        <label for="payment_method">Payment Method</label>
                                        <select class="form-control @error('payment_method') is-invalid @enderror" id="payment_method" name="payment_method" required>
                                            <option value="credit_card" {{ old('payment_method', $payment->payment_method) == 'credit_card' ? 'selected' : '' }}>Credit Card</option>
                                            <option value="paypal" {{ old('payment_method', $payment->payment_method) == 'paypal' ? 'selected' : '' }}>PayPal</option>
                                        </select>
                                        @error('payment_method')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Amount Field -->
                                    <div class="form-group">
                                        <label for="total_amount">Amount</label>
                                        <input type="text" class="form-control @error('total_amount') is-invalid @enderror" id="total_amount"
                                            name="total_amount" value="{{ old('total_amount', $payment->total_amount)}}" required readonly>
                                        @error('total_amount')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Payment Status Field -->
                                    <div class="form-group">
                                        <label for="status">Payment Status</label>
                                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                                            <option value="completed" {{ old('status', $payment->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="pending" {{ old('status', $payment->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="failed" {{ old('status', $payment->status) == 'failed' ? 'selected' : '' }}>Failed</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Payment Date Field -->
                                    <div class="form-group">
                                        <label for="payment_date">Payment Date</label>
                                        <input type="date" class="form-control @error('payment_date') is-invalid @enderror" id="payment_date"
                                            name="payment_date" value="{{ old('payment_date', $payment->payment_date) }}" required>
                                        @error('payment_date')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Update Payment</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
