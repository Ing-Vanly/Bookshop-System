<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Book;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // 1. List all orders
    public function index()
    {
        $orders = Order::with('items.book')->latest()->get();
        return view('backend.order.index', compact('orders'));
    }

    // 2. Show order creation form (optional, for admin UI)
    public function create()
    {
        $books = Book::all();
        $customers = Customer::all();

        return view('backend.order.create', compact('books', 'customers'));
    }

    // 3. Store a new order
    public function store(Request $request)
    {
        // Clean out incomplete book rows
        $books = collect($request->books)->filter(function ($book) {
            return !empty($book['book_id']) && !empty($book['quantity']);
        })->values();

        // Replace cleaned books in request
        $request->merge(['books' => $books]);

        // Validate the cleaned-up request
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'order_status' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        $customer = Customer::findOrFail($request->customer_id);

        $order = Order::create([
            'customer_id' => $customer->id,
            'customer_name' => $customer->name,
            'customer_contact' => $customer->phone,
            'email' => $customer->email,
            'shipping_address' => $customer->address,
            'order_date' => $request->order_date,
            'order_status' => $request->order_status,
            'payment_status' => $request->payment_status,
            'total_amount' => 0,
        ]);

        $total = 0;

        foreach ($request->books as $bookData) {
            $book = Book::find($bookData['book_id']);
            $quantity = (int) $bookData['quantity'];
            $price = floatval(str_replace(['$', ','], '', $bookData['price']));

            // Create order item
            $order->items()->create([
                'book_id' => $book->id,
                'quantity' => $quantity,
                'price' => $price,
            ]);

            // Add to total and decrement stock
            $total += $price * $quantity;
            $book->decrement('stock_quantity', $quantity);
        }

        $order->update(['total_amount' => $total]);

        return redirect()->route('order.index')->with('success', 'Order placed successfully!');
    }

    // 4. Show single order details
    public function show(Order $order)
    {
        $order->load('items.book');
        return view('backend.order.show', compact('order'));
    }

    // 5. Show edit form for an order
    public function edit(Order $order)
    {
        $order->load('items.book');
        $books = Book::all();
        $customers = Customer::all();

        return view('backend.order.edit', compact('order', 'books', 'customers'));
    }

    // 6. Update the order
    public function update(Request $request, Order $order)
    {
        // Validate the incoming request data
        $request->validate([
            'customer_id' => 'required|string',
            'order_status' => 'required|string',
            'payment_status' => 'required|string',
            'shipping_address' => 'required|string',
        ]);

        // Update the order details
        $order->update([
            'customer_id' => $request->customer_id,
            'customer_contact' => $request->customer_contact,
            'shipping_address' => $request->shipping_address,
            'order_status' => $request->order_status,
            'payment_status' => $request->payment_status,
        ]);

        // Recalculate the total amount for the order
        $totalAmount = 0;
        foreach ($request->books as $bookData) {
            $book = Book::find($bookData['book_id']);
            $quantity = (int) $bookData['quantity'];
            $price = floatval(str_replace(['$', ','], '', $bookData['price']));

            // Add book price * quantity to total
            $totalAmount += $price * $quantity;
        }

        // Update the total amount of the order
        $order->update(['total_amount' => $totalAmount]);

        return redirect()->route('order.index')->with('success', 'Order updated successfully!');
    }


    // 7. Delete the order
    public function destroy(Order $order)
    {
        // Restore stock for each book in the order
        foreach ($order->items as $item) {
            $item->book->increment('stock_quantity', $item->quantity);
        }

        // Delete the order and its items
        $order->delete();

        return redirect()->route('order.index')->with('success', 'Order deleted.');
    }

    // 8. Fetch Customer Information for the frontend
    public function getCustomerInfo(Request $request)
    {
        $customer = Customer::find($request->customer_id);

        if (!$customer) {
            return response()->json(['success' => false]);
        }

        return response()->json([
            'success' => true,
            'customer' => [
                'address' => $customer->address,
                'email' => $customer->email,
                'phone' => $customer->phone,
            ]
        ]);
    }
}
