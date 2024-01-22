<?php

use Illuminate\Support\Facades\Route;

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
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
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
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
            'resources/css/main/content.css',
        ],
        'title' => 'Bookings | ApexHubSpot'
    ]);
});

Route::get('/bookings_history', function () {
    return view('bookings_history', [
        'cssPaths' => [
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
            'resources/css/main/content.css',
        ],
        'title' => 'Bookings History | ApexHubSpot'
    ]);
});

Route::get('/office_map', function () {
    return view('office_map', [
        'cssPaths' => [
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
            'resources/css/main/office_map.css',
        ],
        'title' => 'Office Map | ApexHubSpot'
    ]);
});

Route::get('/users', function () {
    return view('users', [
        'cssPaths' => [
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
        ],
        'title' => 'Manage Users | ApexHubSpot'
    ]);
});

Route::get('/desks', function () {
    return view('desks', [
        'cssPaths' => [
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
        ],
        'title' => 'Manage Desks | ApexHubSpot'
    ]);
});

Route::get('/roles', function () {
    return view('roles', [
        'cssPaths' => [
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
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
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
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
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
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
            'resources/css/main/default.css',
            'resources/css/main/sidebar.css',
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
            'resources/css/main/faqs.css',
            'resources/css/main/guide.css',
        ],
        'title' => 'Profile | ApexHubSpot'
    ]);
});
