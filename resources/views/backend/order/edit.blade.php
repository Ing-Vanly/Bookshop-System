@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Edit Order</h1>
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

                        <form action="{{ route('order.update', $order->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Customer Info -->
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="customer_id">Customer</label>
                                    <select name="customer_id" id="customer_id"  class="form-control js-customer-select" required>
                                        <option value="">Select Customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ $order->customer->email }}" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Phone</label>

                                    <input type="text" id="phone" name="customer_contact" class="form-control" value="{{ $order->customer->phone }}" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Address</label>
                                    <input type="text" id="address" name="shipping_address" class="form-control" value="{{ $order->customer->address }}" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Order Date</label>
                                    <input type="date" name="order_date" name="order_date" class="form-control" value="{{ $order->order_date }}" >
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
                                                    @foreach ($order->items as $index => $item)
                                                    <tr class="book-item">
                                                        <td>
                                                            <select name="books[{{ $index }}][book_id]" class="form-control book-select" required>
                                                                <option value="">Select Book</option>
                                                                @foreach ($books as $book)
                                                                    <option value="{{ $book->id }}" {{ $book->id == $item->book_id ? 'selected' : '' }} data-price="{{ $book->price }}">
                                                                        {{ $book->title }} - ${{ number_format($book->price, 2) }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="number" name="books[{{ $index }}][quantity]" class="form-control quantity-input" value="{{ $item->quantity }}" min="1" required>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="books[{{ $index }}][price]" class="form-control book-price" value="${{ number_format($item->price, 2) }}" readonly/>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <button type="button" class="btn btn-success btn-sm btn-add-book">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-sm remove-book">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
                                        @foreach (['pending', 'processing', 'completed', 'cancelled'] as $status)
                                            <option value="{{ $status }}" {{ $order->order_status == $status ? 'selected' : '' }}>
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Payment Status</label>
                                    <select name="payment_status" class="form-control js-order-status" required>
                                        @foreach (['unpaid', 'paid', 'refunded'] as $status)
                                            <option value="{{ $status }}" {{ $order->payment_status == $status ? 'selected' : '' }}>
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

    @push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all the book items
            const bookList = document.querySelector('#book-list');

            // Add a new book row
            function addBookRow(index) {
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
                        <input type="text" name="books[${index}][price]" class="form-control book-price" placeholder="Price" readonly />
                    </td>
                    <td class="text-center align-middle">
                        <button type="button" class="btn btn-success btn-sm btn-add-book">
                            <i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm remove-book">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                `;
                bookList.appendChild(newRow);
                attachEventListeners(newRow);
            }

            // Attach event listeners to the new row
            function attachEventListeners(row) {
                const addBookBtn = row.querySelector('.btn-add-book');
                const removeBookBtn = row.querySelector('.remove-book');

                // Add event listener for adding a new book
                addBookBtn.addEventListener('click', function () {
                    const index = bookList.children.length;
                    addBookRow(index);
                });

                // Add event listener for removing a book
                removeBookBtn.addEventListener('click', function () {
                    row.remove();
                });
            }

            // Initialize the first book row
            bookList.querySelectorAll('.book-item').forEach(function (row, index) {
                attachEventListeners(row);
            });

            // Calculate totals when quantity or book selection changes
            bookList.addEventListener('input', function (e) {
                if (e.target.name.includes('[quantity]') || e.target.name.includes('[book_id]')) {
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
                        const unitPrice = parseFloat(select.options[select.selectedIndex]?.getAttribute('data-price')) || 0;
                        const quantity = parseInt(qtyInput.value) || 1;
                        priceField.value = `$${(unitPrice * quantity).toFixed(2)}`;
                    }
                });
            }

            // Initialize totals for existing rows on page load
            calculateBookTotals();
        });
    </script>
    @endpush
@endsection
