<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource (all customers).
     */
    public function index()
    {
        // Fetch all customers from the database
        $customers = Customer::all();

        // Return the customers view with the list of customers
        return view('backend.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create customer form view
        return view('backend.customer.create');
    }

    /**
     * Store a newly created resource in storage (create a new customer).
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Create the customer and save it to the database
        $customer = Customer::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Hash the password
            'address' => $validated['address'],
            'phone' => $validated['phone'],
        ]);

        // Redirect back with a success message
        return redirect()->route('customer.index')->with('success', 'Customer created successfully!');
    }

    /**
     * Display the specified resource (single customer by ID).
     */
    public function show(string $id)
    {
        // Find the customer by ID
        $customer = Customer::find($id);

        // Check if customer exists and return the view
        if ($customer) {
            return view('backend.customer.show', compact('customer'));
        }

        // If customer not found, redirect with error message
        return redirect()->route('customer.index')->with('error', 'Customer not found');
    }

    /**
     * Show the form for editing the specified resource (edit customer).
     */
    public function edit(string $id)
    {
        // Find the customer by ID
        $customer = Customer::find($id);

        // Check if customer exists and return the edit form view
        if ($customer) {
            return view('backend.customer.edit', compact('customer'));
        }

        // If customer not found, redirect with error message
        return redirect()->route('customer.index')->with('error', 'Customer not found');
    }

    /**
     * Update the specified resource in storage (update customer by ID).
     */
    public function update(Request $request, string $id)
    {
        // Validate incoming request data (ignore email uniqueness for the current customer)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $id, // Ignore unique validation for the current customer
            'address' => 'required|string',
            'phone' => 'required|string',
            'password' => 'nullable|string|min:8', // Password is optional on update
        ]);

        // Find the customer by ID
        $customer = Customer::find($id);

        if ($customer) {
            // Only update the password if a new password is provided
            if ($request->filled('password')) {
                $validated['password'] = bcrypt($validated['password']);
            }

            // Update the customer details in the database
            $customer->update($validated);

            // Redirect back with a success message
            return redirect()->route('customer.index')->with('success', 'Customer updated successfully!');
        }

        // If customer not found, redirect with error message
        return redirect()->route('customer.index')->with('error', 'Customer not found');
    }

    /**
     * Remove the specified resource from storage (delete customer by ID).
     */
    public function destroy(string $id)
    {
        // Find the customer by ID
        $customer = Customer::find($id);

        if ($customer) {
            // Delete the customer from the database
            $customer->delete();

            // Redirect back with a success message
            return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
        }

        // If customer not found, redirect with error message
        return redirect()->route('customer.index')->with('error', 'Customer not found');
    }
}
