<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function update(User $user)
    {
        $attributes = $this->validateUser($user);

        $user->update($attributes);

        return back()->with('success', 'User Updated');
    }

    public function edit(User $user)
    {
        return  view('users.edit', ['user' => $user]);
    }

    private function validateUser(?User $user = null)
    {
        $user ??= new User();

        $hashedPassword = password_hash($user->password, PASSWORD_BCRYPT);

        return request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'thumbnail' => $user->exists ? ['image'] : ['required', 'image'],
            'password' => $hashedPassword
        ]);
    }
}
