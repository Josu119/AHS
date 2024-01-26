<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show all users
    public function index() {
        return view('users.index', [
            'cssPaths' => [
                'resources/css/main/content.css',
            ],
            'title' => 'Manage Users | ApexHubSpot',
            'users' => User::latest()->filter(request(['search']))->paginate(10)
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

    // Show create form
    public function create() {
        return view('users.create', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Manage Users | ApexHubSpot',
        ]);
    }

    // Store item data
    public function store(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required',
        ]);

        User::create($formFields);

        return redirect('/users')->with('message', 'Update: User created!');
    }

    // Show edit form
    public function edit(User $user) {
        return view('users.edit', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Manage Users | ApexHubSpot',
            'user' => $user,
        ]);
    }

    // Update item data
    public function update(Request $request, User $user) {
        $formFields = $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            // 'email' => ['required', 'email'],
            // 'password' => 'required',
        ]);

        $user->update($formFields);

        return back()->with('message', 'Update: User edited!');
    }
}
