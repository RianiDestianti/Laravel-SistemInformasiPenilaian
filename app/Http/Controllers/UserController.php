<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('user.index');
    }

    public function edit(User $user) {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'username' => 'required',
            'role' => 'required'
        ]);

        $user->update([
            'username' => $request->username,
            'role' => $request->role,
        ]);

        if ($request->password) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        return redirect()->route('user.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('user.index');
    }
}
