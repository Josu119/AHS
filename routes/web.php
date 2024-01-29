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

Route::get('/users/register', [UserController::class, 'register']);

Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/users/sign_in', [UserController::class, 'sign_in'])->name('login')->middleware('guest');

Route::post('/sign_in', [UserController::class, 'authenticate']);

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
})/*->middleware('auth')*/;

Route::get('/bookings', function () {
    return view('bookings', [
        'cssPaths' => [
            'resources/css/main/content.css',
        ],
        'title' => 'Bookings | ApexHubSpot'
    ]);
})/*->middleware('auth')*/;

Route::get('/bookings_history', function () {
    return view('bookings_history', [
        'cssPaths' => [
            'resources/css/main/content.css',
        ],
        'title' => 'Bookings History | ApexHubSpot'
    ]);
})/*->middleware('auth')*/;

Route::get('/office_map', function () {
    return view('office_map', [
        'cssPaths' => [
            'resources/css/main/office_map.css',
        ],
        'title' => 'Office Map | ApexHubSpot'
    ]);
})/*->middleware('auth')*/;

Route::get('/roles', function () {
    return view('roles', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/roles.css',
        ],
        'title' => 'Manage Roles | ApexHubSpot'
    ]);
})/*->middleware('auth')*/;

Route::get('/faqs', function () {
    return view('faqs', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
        ],
        'title' => 'Frequently Asked Questions | ApexHubSpot'
    ]);
})/*->middleware('auth')*/;

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
})/*->middleware('auth')*/;

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
})/*->middleware('auth')*/;

// Common Resource Routes:
// index - Show all items
// show - Show single item
// create - Show form to create new item
// store - Store new item
// edit - Show form to edit item
// update - Update item
// destroy - Delete item

Route::get('/users', [UserController::class, 'index'])/*->middleware('auth')*/;

// for creating item
Route::get('/users/create', [UserController::class, 'create'])/*->middleware('auth')*/;

Route::post('/users', [UserController::class, 'admin_store'])/*->middleware('auth')*/;

// for editing item
Route::get('/users/{user}/edit', [UserController::class, 'edit'])/*->middleware('auth')*/;

Route::put('/users/{user}/edit', [UserController::class, 'update'])/*->middleware('auth')*/;

Route::put('/users/{user}', [UserController::class, 'approve'])/*->middleware('auth')*/;

Route::delete('/users/{user}', [UserController::class, 'destroy'])/*->middleware('auth')*/;

// Show route should be always at the last line after preceeding paths
// Route::get('/users/{user}', [UserController::class, 'show'])->middleware('auth');

Route::get('/desks', [DeskController::class, 'index'])/*->middleware('auth')*/;

Route::get('/desks/create', [DeskController::class, 'create'])/*->middleware('auth')*/;

Route::post('/desks', [DeskController::class, 'store'])/*->middleware('auth')*/;

Route::put('/desks/{desk}', [DeskController::class, 'availability'])/*->middleware('auth')*/;

Route::delete('/desks/{desk}', [DeskController::class, 'destroy'])/*->middleware('auth')*/;
