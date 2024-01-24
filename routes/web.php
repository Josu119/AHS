<?php

use App\Http\Controllers\DeskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Desk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/dashboard.css',
        ],
        'title' => 'Dashboard | ApexHubSpot'
    ]);
});

Route::get('/bookings', function () {
    return view('bookings', [
        'cssPaths' => [
            'resources/css/main/content.css',
        ],
        'title' => 'Bookings | ApexHubSpot'
    ]);
});

Route::get('/bookings_history', function () {
    return view('bookings_history', [
        'cssPaths' => [
            'resources/css/main/content.css',
        ],
        'title' => 'Bookings History | ApexHubSpot'
    ]);
});

Route::get('/office_map', function () {
    return view('office_map', [
        'cssPaths' => [
            'resources/css/main/office_map.css',
        ],
        'title' => 'Office Map | ApexHubSpot'
    ]);
});

Route::get('/roles', function () {
    return view('roles', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/roles.css',
        ],
        'title' => 'Manage Roles | ApexHubSpot'
    ]);
});

Route::get('/faqs', function () {
    return view('faqs', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
        ],
        'title' => 'Frequently Asked Questions | ApexHubSpot'
    ]);
});

Route::get('/guide', function () {
    return view('guide', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
            'resources/css/main/guide.css',
        ],
        'title' => 'User Guide | ApexHubSpot'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
            'resources/css/main/guide.css',
        ],
        'title' => 'Profile | ApexHubSpot'
    ]);
});

// Common Resource Routes:
// index - Show all items
// show - Show single item
// create - Show form to create new item
// store - Store new item
// edit - Show form to edit item
// update - Update item
// destroy - Delete item

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

// Show route should be always at the last line after preceeding paths
// Route::get('/users/{user}', [UserController::class, 'show']);

Route::get('/desks', [DeskController::class, 'index']);
