<?php
// app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create()
    {
        // return $orders;
        return view('backend.payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_method' => 'required|in:credit_card,paypal,cash',
            'status' => 'required|in:completed,failed,pending',
        ]);

        $order = Order::find($request->order_id);
        $payment = new Payment();
        $payment->order_id = $request->order_id;
        $payment->payment_method = $request->payment_method;
        $payment->total_amount = $order->total_amount;
        $payment->payment_date = now();
        $payment->status = $request->status;
        $payment->save();
        return redirect()->route('payments.index')->with('success', 'Payment created successfully.');
    }
    public function index()
    {
        $payments = Payment::all();
        $orders = Order::all();

        return view('backend.payments.index', compact('payments','orders'));
    }

    public function show($id)
    {
        $payment = Payment::findOrFail($id);

        return view('backend.payments.show', compact('payment'));
    }
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        $orders = Order::all();
        return view('backend.payments.edit', compact('payment', 'orders'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_method' => 'required|in:credit_card,paypal,cash',
            'status' => 'required|in:completed,failed,pending',
        ]);

        $payment = Payment::findOrFail($id);

        $order = Order::find($request->order_id);

        $payment->order_id = $request->order_id;
        $payment->payment_method = $request->payment_method;
        $payment->total_amount = $order->total_amount;
        $payment->status = $request->status;
        $payment->payment_date = now();
        $payment->save();
        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }
}
