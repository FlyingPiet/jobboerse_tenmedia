<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
    }
}
