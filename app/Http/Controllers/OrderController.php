<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $orders = Order::with('orderItems')->get(); // Get orders with order items
        dd($orders); 
        return view('backend.order.index', compact('orders'));
    }

    // Show a form for creating a new order
    public function create() {
        $users = User::where('role', 'customer')->get(); // Get customers for order creation
        return view('backend.order.create', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_price' => 'required|numeric',
            'status' => 'required|in:pending,completed,canceled',
            'payment_method' => 'nullable|string',
        ]);

        Order::create($request->all());
        return redirect()->route('order.index')->with('success', 'Order created successfully.');
    }

    // Display a specific order
    public function show($id) {
        $order = Order::with('orderItems')->findOrFail($id);
        return view('backend.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
