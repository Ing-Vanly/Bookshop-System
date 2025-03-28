@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Add New Order</h1>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">Order Information</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf

                            <!-- Customer Info -->
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="customer_id">Customer</label>
                                    <select name="customer_id" id="customer_id" class="form-control js-customer-select"
                                        required>
                                        <option value="">Select Customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="email" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Phone</label>
                                    <input type="text" id="phone" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Address</label>
                                    <input type="text" id="address" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Order Date</label>
                                    <input type="date" name="order_date" class="form-control"
                                        value="{{ old('order_date', date('Y-m-d')) }}" required>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <fieldset class="border p-3">
                                        <legend>Books</legend>
                                        <div class="container">
                                            <table class="table table-bordered" id="bookTable">
                                                <thead class="thead-light text-center">
                                                    <tr>
                                                        <th style="width: 55%;">Book</th>
                                                        <th style="width: 15%;">Quantity</th>
                                                        <th style="width: 15%;">Price</th>
                                                        <th style="width: 15%;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="book-list">
                                                    <tr class="book-item">
                                                        <td>
                                                            <select name="books[0][book_id]"
                                                                class="form-control book-select"
                                                                onchange="calculateBookTotals()" required>
                                                                <option value="">Select Book</option>
                                                                @foreach ($books as $book)
                                                                    <option value="{{ $book->id }}"
                                                                        data-price="{{ $book->price }}">{{ $book->title }}
                                                                        - ${{ number_format($book->price, 2) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="number" name="books[0][quantity]"
                                                                class="form-control quantity-input" value="1"
                                                                min="1" oninput="calculateBookTotals()" required>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="books[0][price]"
                                                                class="form-control book-price" placeholder="Price" />
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <button type="button"
                                                                class="btn btn-success btn-sm btn-add-book">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm remove-book">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <!-- Order Status -->
                            <div class="row mt-3">
                                <div class="form-group col-md-6">
                                    <label>Order Status</label>
                                    <select name="order_status" class="form-control js-order-status" required>
                                        <option value="">Select Status</option>
                                        @foreach (['pending', 'processing', 'completed', 'cancelled'] as $status)
                                            <option value="{{ $status }}"
                                                {{ old('order_status') == $status ? 'selected' : '' }}>
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Payment Status</label>
                                    <select name="payment_status" class="form-control js-order-status" required>
                                        <option value="">Select Payment</option>
                                        @foreach (['unpaid', 'paid', 'refunded'] as $status)
                                            <option value="{{ $status }}"
                                                {{ old('payment_status') == $status ? 'selected' : '' }}>
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success">Save Order</button>
                                <a href="{{ route('order.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script>
         const customers = @json($customers->mapWithKeys(fn($c) => [
        $c->id => [
            'address' => $c->address,
            'email' => $c->email,
            'phone' => $c->phone
        ]
    ]));

        $(document).ready(function() {
            // Initialize customer and order status select elements
            $('.js-customer-select').select2({
                placeholder: 'Select a customer',
                width: '100%'
            });
            $('.js-order-status').select2({
                minimumResultsForSearch: -1
            });

            // Update customer information when a customer is selected
            $('#customer_id').on('change', function() {
                const customer = customers[$(this).val()];
                $('#address').val(customer ? customer.address : '');
                $('#email').val(customer ? customer.email : '');
                $('#phone').val(customer ? customer.phone : '');
            });

            // Trigger change event on page load if a customer is already selected
            if ($('#customer_id').val()) {
                $('#customer_id').trigger('change');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const bookList = document.querySelector('#book-list');
            const addBookBtn = document.querySelector('.btn-add-book');

            // Function to add a new book row
            addBookBtn.addEventListener('click', function() {
                const index = bookList.children.length + 1;
                const newRow = document.createElement('tr');
                newRow.classList.add('book-item');
                newRow.innerHTML = `
                <td>
                    <select name="books[${index}][book_id]" class="form-control book-select" required>
                        <option value="">Select Book</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}" data-price="{{ $book->price }}">{{ $book->title }} - ${{ number_format($book->price, 2) }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="number" name="books[${index}][quantity]" class="form-control quantity-input" value="1" min="1" required>
                </td>
                <td>
                    <input type="text" name="books[${index}][price]" class="form-control book-price" placeholder="Price" />
                </td>
                <td class="text-center align-middle">
                    <button type="button" class="btn btn-danger btn-sm remove-book">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
                `;
                bookList.appendChild(newRow);
            });

            // Remove a book row
            bookList.addEventListener('click', function(e) {
                if (e.target.closest('.remove-book')) {
                    e.target.closest('tr').remove();
                    updateBookIndexes();
                    calculateBookTotals();
                }
            });

            // Calculate totals when quantity or book selection changes
            bookList.addEventListener('input', function(e) {
                if (e.target.name.includes('[quantity]')) {
                    calculateBookTotals();
                }
            });

            bookList.addEventListener('change', function(e) {
                if (e.target.classList.contains('book-select')) {
                    calculateBookTotals();
                }
            });

            // Function to calculate book totals
            function calculateBookTotals() {
                document.querySelectorAll('.book-item').forEach(item => {
                    const select = item.querySelector('.book-select');
                    const qtyInput = item.querySelector('input[name*="[quantity]"]');
                    const priceField = item.querySelector('.book-price');

                    if (select && qtyInput && priceField) {
                        const unitPrice = parseFloat(select.options[select.selectedIndex].getAttribute(
                            'data-price')) || 0;
                        const quantity = parseInt(qtyInput.value) || 1;
                        priceField.value = `$${(unitPrice * quantity).toFixed(2)}`;
                    }
                });
            }

            // Expose the calculateBookTotals function globally
            window.calculateBookTotals = calculateBookTotals;

            // Initialize totals for existing rows on page load
            calculateBookTotals();
        });
    </script>
@endpush
