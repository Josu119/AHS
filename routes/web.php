<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DeskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Desk;
use App\Models\Booking;
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

Route::get('/users/register', [UserController::class, 'register'])->middleware('guest');

Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/users/sign_in', [UserController::class, 'sign_in'])->name('login')->middleware('guest');

Route::post('/sign_in', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/hold', [UserController::class, 'hold']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/dashboard.css',
        ],
        'title' => 'Dashboard | ApexHubSpot'
    ]);
})->middleware('auth');

Route::get('/office_map', function () {
    return view('office_map', [
        'cssPaths' => [
            'resources/css/main/office_map.css',
        ],
        'title' => 'Office Map | ApexHubSpot'
    ]);
})->middleware('auth');

Route::get('/faqs', function () {
    return view('faqs', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
        ],
        'title' => 'Frequently Asked Questions | ApexHubSpot'
    ]);
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');

// Common Resource Routes:
// index - Show all items
// show - Show single item
// create - Show form to create new item
// store - Store new item
// edit - Show form to edit item
// update - Update item
// destroy - Delete item

Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'hold', 'admin']);

// for creating item
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth', 'hold', 'admin']);

Route::post('/users', [UserController::class, 'admin_store'])->middleware(['auth', 'hold', 'office_manager']);

// for editing item
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware(['auth', 'hold', 'admin']);

Route::put('/users/{user}/edit', [UserController::class, 'update'])->middleware(['auth', 'hold', 'admin']);

Route::put('/users/{user}', [UserController::class, 'approve'])->middleware(['auth', 'hold', 'office_manager']);

Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth', 'hold', 'admin']);

Route::get('/desks', [DeskController::class, 'index'])->middleware(['auth', 'hold', 'office_manager']);

Route::get('/desks/create', [DeskController::class, 'create'])->middleware(['auth', 'hold', 'office_manager']);

Route::post('/desks', [DeskController::class, 'store'])->middleware(['auth', 'hold', 'office_manager']);

Route::put('/desks/{desk}', [DeskController::class, 'availability'])->middleware(['auth', 'hold', 'office_manager']);

Route::delete('/desks/{desk}', [DeskController::class, 'destroy'])->middleware(['auth', 'hold', 'office_manager']);

Route::get('/bookings', [BookingController::class, 'index'])->middleware(['auth', 'hold']);

Route::get('/desks/available', [BookingController::class, 'list_desks'])->middleware(['auth', 'hold']);

// * UNUSED ROUTES

// Route::get('/roles', function () {
//     return view('roles', [
//         'cssPaths' => [
//             'resources/css/main/content.css',
//             'resources/css/main/content2.css',
//             'resources/css/main/roles.css',
//         ],
//         'title' => 'Manage Roles | ApexHubSpot'
//     ]);
// })->middleware('auth');

// Route::get('/bookings/history', [BookingController::class, 'history'])->middleware('auth');

// Show route should be always at the last line after preceeding paths
// Route::get('/users/{user}', [UserController::class, 'show'])->middleware('auth');
Route::put('/book/{desk}', [DeskController::class, 'book'])->name('book');
// Route::get('/bookings', 'BookingController@index')->name('bookings.index1');

Route::get('/bookings', [BookingController::class, 'index1']);
Route::get('/profile',[DeskController::class, 'getSelfBookings'])->name('self.bookings');



Route::delete('/booking/{booking}/destroy',[BookingController::class,'destroy'])->name('booking.destroy');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::get('/dashboard', [DashboardController::class, 'index']);



use App\Http\Controllers\FloorPlanController;

Route::resource('floor-plans', FloorPlanController::class)->only(['update']);
Route::get('/office-map/{id}', 'FloorPlanController@show')->name('office.map.show');
