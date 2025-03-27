<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('backend.orderItem.index', compact('orderItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.orderItem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
            'subtotal' => 'required|numeric',
        ]);

        OrderItem::create($request->all());
        return redirect()->back()->with('success', 'Order item added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $orderItem = OrderItem::findOrFail($id);
        return view('backend.orderItem.show', compact('orderItem'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $orderItem = OrderItem::findOrFail($id);
        return view('backend.orderItem.edit', compact('orderItem'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $orderItem = OrderItem::findOrFail($id);

        $request->validate([
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
            'subtotal' => 'required|numeric',
        ]);

        $orderItem->update($request->all());
        return redirect()->route('orderitem.index')->with('success', 'Order item updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();
        return redirect()->route('orderitem.index')->with('success', 'Order item deleted successfully.');
    }

}
