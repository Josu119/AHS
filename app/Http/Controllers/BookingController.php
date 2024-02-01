<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Desk;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\AvailableDesk;



class BookingController extends Controller
{
    public function index()
    {
        // $today = Carbon::now(); // to be used for sorting out bookings from yesterday to preceding days
        return view('bookings.index', [
            'cssPaths' => [
                'resources/css/main/content.css',
            ],
            'title' => 'Bookings | ApexHubSpot',
            'bookings' => Booking::query()
                                 ->orderBy('available_desk_id', 'asc')
                                 ->orderBy('desk_id', 'asc')
                                 ->paginate(10),
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
                'resources/css/main/faqs.css',
                'resources/css/main/guide.css',
            ],
            'title' => 'Profile | ApexHubSpot',
            'bookings' => Booking::query()->where('user_id', auth()->id())
                                          ->orderBy('available_desk_id', 'asc')
                                          ->orderBy('desk_id', 'asc')
                                          ->paginate(5),
        ]);
    }

    public function book(AvailableDesk $available_desk)
    {
        $desk_id = $available_desk->desk_id;
        $booked_by_user = Booking::where('available_desk_id', $available_desk->id)
            ->where('user_id', auth()->id())
            ->first();
        $booked_by_other = Booking::where('available_desk_id', $available_desk->id)
            ->first();

        if ($booked_by_user) {
            return back()->with('error', 'You have already booked a desk for this day.');
        }
        elseif ($booked_by_other) {
            return back()->with('error', 'Someone booked this already, try another desk.');
        }

        Booking::create([
            'user_id' => auth()->user()->id,
            'desk_id' => $desk_id,
            'available_desk_id' => $available_desk->id
        ]);

        return redirect('/bookings')->with('message', 'You have booked a desk at ' . $available_desk->date . '!');
    }

    // Delete booking (office_manager)
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect('/bookings')->with('message', 'Update: Booking canceled!');
    }

    // Delete own booking
    public function destroy_self(Booking $booking)
    {
        $booking->delete();
        return redirect('/profile')->with('message', 'Update: One of your bookings is canceled!');
    }
}
