<?php

namespace App\Http\Controllers;

use App\Models\AvailableDesk;
use App\Models\Desk;
use Carbon\Carbon;
use App\Models\Booking;
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

public function list_desks(Request $request)
{
    $searchDate = Carbon::parse($request->input('date'))->toDateString();

    // Retrieve the desks that are available on the specified date
    $availableDesks = Desk::where('is_out_of_order', 0)->get();

    // Create the available desk entries for the specified date
    AvailableDesk::truncate();
    foreach ($availableDesks as $desk) {
        AvailableDesk::create([
            'date' => $searchDate,
            'desk_id' => $desk->id,
        ]);
    }

    return view('bookings.list_desks', [
        'cssPaths' => [
            'resources/css/main/content.css',
            'resources/css/main/content2.css',
        ],
        'title' => 'Available Desks | ApexHubSpot',
        'desks' => AvailableDesk::where('date', $searchDate)
            ->orderBy('desk_id', 'asc')
            ->orderBy('date', 'asc')
            ->paginate(5)
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



 public function index1()
    {
        $bookings = Booking::all(); // Fetch all the data from the "booking" table
        
        return view('bookings.index', compact('bookings'));
    }


    
public function destroy(Booking $booking){
    $booking->delete();

  return redirect()->back()->with('success', 'Booking Cancelled successfully.');

}

}
