@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Payments</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Payments</li>
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
                        <div class="d-flex justify-content-end mb-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                <i class="fas fa-plus"></i> Add New Payment
                            </button>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Payment Management</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="paymentsTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Order ID</th>
                                            <th>Payment Method</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>Payment Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)
                                            <tr>
                                                <td>{{ $payment->id }}</td>
                                                <td>{{ $payment->order_id }}</td>
                                                <td>{{ $payment->payment_method }}</td>
                                                <td>$ {{ number_format($payment->total_amount, 2) }}</td>
                                                <td>{{ ucfirst($payment->status) }}</td>
                                                <td>{{ \Carbon\Carbon::parse($payment->payment_date)->format('Y-m-d H:i') }}</td>
                                                <td>
                                                    <a href="{{ route('order.show', $payment->order_id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye"></i> View
                                                    </a>
                                                    <a href="{{ route('payments.edit', $payment->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a type="button" class="btn btn-danger btn-sm delete-btn"
                                                        data-id="{{ $payment->id }}"
                                                        data-url="{{ route('payments.destroy', $payment->id) }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

    <!-- Create Payment Modal -->
    @include('backend.payments.create')

    <script>
        document.querySelectorAll('.delete-btn').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const paymentId = this.getAttribute('data-id');
                const deleteUrl = this.getAttribute('data-url');

                // Show SweetAlert2 confirmation
                Swal.fire({
                    title: 'Delete Payment',
                    text: 'Are you sure you want to delete this payment?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Create a form element
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = deleteUrl;
                        form.style.display = 'none';

                        // Add CSRF token
                        const csrfToken = document.createElement('input');
                        csrfToken.type = 'hidden';
                        csrfToken.name = '_token';
                        csrfToken.value = '{{ csrf_token() }}';
                        form.appendChild(csrfToken);

                        // Add method spoofing for DELETE
                        const methodField = document.createElement('input');
                        methodField.type = 'hidden';
                        methodField.name = '_method';
                        methodField.value = 'DELETE';
                        form.appendChild(methodField);

                        // Append form to body, submit it, then remove it
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
