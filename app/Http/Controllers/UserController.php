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
        $users = User::with('role')->paginate(10);
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
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'role_id' => 'required|exists:roles,id',
                'phone_number' => 'nullable|string|max:15',
                'user_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                'phone_number' => $request->phone_number,
            ]);

            // Handle file upload for user profile
            if ($request->hasFile('user_profile') && $request->file('user_profile')->isValid()) {
                $file = $request->file('user_profile');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('img/user_profiles'), $fileName);
                $user->user_profile = 'img/user_profiles/' . $fileName;
                $user->save();
            }

            return redirect()->route('user.index')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // If an error occurs, redirect with a custom error message
            return redirect()->route('user.create')->with('error',  $e->getMessage());
            // return redirect()->route('user.index')->withErrors('Error creating user: ' . $e->getMessage());
        }
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
            'user_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
        if ($request->hasFile('user_profile') && $request->file('user_profile')->isValid()) {
            // Delete old profile photo if exists
            if ($user->user_profile) {
                $oldPath = public_path($user->user_profile);
                if (file_exists($oldPath)) {
                    unlink($oldPath); // Delete old image from the server
                }
            }

            // Generate a unique filename
            $file = $request->file('user_profile');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move file to the public/img/profile_images directory
            $file->move(public_path('img/user_profiles'), $fileName);

            // Save the relative path to the database
            $user->cover_image = 'img/user_profiles/' . $fileName;
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
