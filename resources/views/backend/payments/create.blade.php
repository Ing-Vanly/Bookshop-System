<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modal-lg-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-lg-label">Create Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="createPaymentForm" action="{{ route('payments.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Order ID Field -->
                    <div class="form-group">
                        <label for="order_id">Order ID</label>
                        <select class="form-control @error('order_id') is-invalid @enderror" id="order_id"
                            name="order_id" required>
                            <option value="">Select Order</option>
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}"
                                    {{ old('order_id') == $order->id ? 'selected' : '' }}
                                    data-amount="{{ $order->total_amount }}">
                                    {{ $order->id }}
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
                        <select class="form-control @error('payment_method') is-invalid @enderror" id="payment_method"
                            name="payment_method" required>
                            <option value="credit_card" {{ old('payment_method') == 'credit_card' ? 'selected' : '' }}>
                                Credit Card</option>
                            <option value="paypal" {{ old('payment_method') == 'paypal' ? 'selected' : '' }}>PayPal
                            </option>

                        </select>
                        @error('payment_method')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Amount Field -->
                    <div class="form-group">
                        <label for="total_amount"> Total Amount</label>
                        <input type="text" class="form-control @error('total_amount') is-invalid @enderror"
                            id="total_amount" name="total_amount" placeholder="Enter payment amount"
                            value="{{ old('total_amount') ? '$' . number_format(old('total_amount'), 2) : '' }}"
                            required readonly>
                        @error('total_amount')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Payment Status Field -->
                    <div class="form-group">
                        <label for="status">Payment Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status"
                            required>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed
                            </option>
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="failed" {{ old('status') == 'failed' ? 'selected' : '' }}>Failed</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Payment Date Field -->
                    <div class="form-group">
                        <label for="payment_date">Payment Date</label>
                        <input type="date" class="form-control @error('payment_date') is-invalid @enderror"
                            id="payment_date" name="payment_date" value="{{ old('payment_date') }}" required>
                        @error('payment_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Payment</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('order_id').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var totalAmount = selectedOption.getAttribute('data-amount');
        document.getElementById('total_amount').value = totalAmount;
    });
</script>
