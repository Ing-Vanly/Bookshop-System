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
            // 'books' => 'required|array|min:1',
            // 'books.*.book_id' => 'required|exists:books,id',
            // 'books.*.quantity' => 'required|integer|min:1',
            // 'books.*.price' => 'required|string',
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
        return view('backend.order.edit', compact('order', 'books'));
    }

    // 6. Update the order
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer_name' => 'required|string',
            'shipping_address' => 'required|string',
            'order_status' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        $order->update([
            'customer_name' => $request->customer_name,
            'customer_contact' => $request->customer_contact,
            'shipping_address' => $request->shipping_address,
            'order_status' => $request->order_status,
            'payment_status' => $request->payment_status,
        ]);

        return redirect()->route('order.index')->with('success', 'Order updated!');
    }

    // 7. Delete the order
    public function destroy(Order $order)
    {
        // Restore stock for each book in the order
        foreach ($order->items as $item) {
            $item->book->increment('stock_quantity', $item->quantity);
        }

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
