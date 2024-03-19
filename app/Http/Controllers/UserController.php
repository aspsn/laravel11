<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index', [
            'user' => [
                'name' => 'Asep',
                'email' => 'asepsanusisan@gmail.com'
            ],
            // 'users' => User::all()->map(function ($user) {
            //     return [
            //         'id' => $user->id,
            //         'name' => $user->name,
            //         'edit_url' => route('users.edit', $user),
            //     ];
            // }),
            // 'create_url' => route('users.create'),
        ]);
    }
}
