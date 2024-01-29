<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        return view('bookings.index', [
            'cssPaths' => [
                'resources/css/main/content.css',
            ],
            'title' => 'Bookings | ApexHubSpot'
        ]);
    }

    // public function history() {
    //     return view('bookings.history', [
    //         'cssPaths' => [
    //             'resources/css/main/content.css',
    //         ],
    //         'title' => 'Bookings History | ApexHubSpot'
    //     ]);
    // }
}
