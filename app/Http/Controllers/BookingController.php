<?php

namespace App\Http\Controllers;

use App\Models\AvailableDesk;
use App\Models\Desk;
use Carbon\Carbon;
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

    public function list_desks() {
        AvailableDesk::truncate();


        foreach (Desk::all() as $desk) {
            $date = Carbon::now();
            for ($i = 1; $i <= 7; $i++) {
                AvailableDesk::create([
                    'date' => $date->toDateString(),
                    'desk_id' => $desk->id,
                ]);
                $date->addDays(1);
            }
        }

        // dd(AvailableDesks::all());

        return view('bookings.list_desks', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Available Desks | ApexHubSpot',
            'desks' => AvailableDesk::orderBy('desk_id', 'asc')
                                    ->orderBy('date', 'asc')
                                    ->filter(request(['search']))
                                    ->paginate(10)
        ]);
    }

    public function show_list_desks() {

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
