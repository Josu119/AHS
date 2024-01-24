<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Show all users
    public function index() {
        return view('users.index', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Manage Users | ApexHubSpot',
            'users' => User::latest()->filter(request(['search']))->get()
        ]);
    }

    // Show single user
    // public function show(User $user) {
    //     return view('users.show', [
    //         'cssPaths' => [
    //             'resources/css/main/content.css',
    //             'resources/css/main/content2.css',
    //         ],
    //         'title' => 'User | ApexHubSpot',
    //         'user' => $user
    //     ]);
    // }
}
