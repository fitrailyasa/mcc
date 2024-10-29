<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        User::create($request->all());
        return back()->with('alert', 'Success create User!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:8',
        ]);

        $user = User::findOrFail($id);
        $userData = $request->except(['password']);

        // Only hash password if it's provided
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);
        return back()->with('alert', 'Success Edit User!');
    }

    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return back()->with('alert', 'Success Delete User!');
    }
}
