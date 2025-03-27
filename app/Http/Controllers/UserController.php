<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->get();

        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('backend.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'role_id' => 'required|exists:roles,id',
                'phone_number' => 'nullable|string|max:15',
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                'phone_number' => $request->phone_number,
            ]);

            if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
                // Generate unique filename
                $file = $request->file('profile_image');
                $fileName = time() . '_' . $file->getClientOriginalName();

                // Move file to the public/images/profile-photos directory
                $file->move(public_path('img/profile_images'), $fileName);

                // Save relative path to database
                $user->profile_image = 'img/profile_images/' . $fileName;
                $user->save();
            }

            return redirect()->route('user.index')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // If an error occurs, redirect with a custom error message
            return redirect()->route('user.create')->with('error',  $e->getMessage());
            // return redirect()->route('user.index')->withErrors('Error creating user: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
       
        $user = User::findOrFail($id);
        return view('backend.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('backend.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed', // Allow password to be optional
            'role_id' => 'required|exists:roles,id',
            'phone_number' => 'nullable|string|max:15',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'phone_number' => $request->phone_number,
        ]);

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        // Handle profile image upload if provided
        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            // Delete old profile photo if exists
            if ($user->profile_image) {
                $oldPath = public_path($user->profile_image);
                if (file_exists($oldPath)) {
                    unlink($oldPath); // Delete old image from the server
                }
            }

            // Generate a unique filename
            $file = $request->file('profile_image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move file to the public/img/profile_images directory
            $file->move(public_path('img/profile_images'), $fileName);

            // Save the relative path to the database
            $user->profile_image = 'img/profile_images/' . $fileName;
            $user->save();
        }


        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }
}
