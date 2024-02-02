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
        $today = Carbon::create(Carbon::now()->toDateString()); // set to current day at 12am
        foreach(Booking::all() as $booking) {
            if ($today->greaterThan(Carbon::create(AvailableDesk::find($booking->available_desk_id)->date))) {
                $booking->delete();
            }
        }
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

    public function book(Request $request,AvailableDesk $available_desk)
    {
        $desk_id = $available_desk->desk_id;
        $date = $request->input('date');

        if (Desk::find($desk_id)->is_out_of_order == 1) {
            return back()->with('error', 'The desk is out of order!');
        }

        $booked_by_user = Booking::where('user_id', auth()->id())
        ->where('date', $date)
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
            'date' => $date,
            'user_id' => auth()->user()->id,
            'desk_id' => $desk_id,
            'available_desk_id' => $available_desk->id
        ]);

        return redirect('/profile')->with('message', 'You have booked a desk at ' . $available_desk->date . '!');
    }

    // Delete booking (office_manager)
    public function destroy(Booking $booking)
    {
        $today = Carbon::now()->toDateString();
        $book_date = AvailableDesk::find($booking->available_desk_id)->date;
        if($today == $book_date){
            return back()->with('error','The booking is currently on going!');
        }
        $booking->delete(); 
        return redirect('/bookings')->with('message', 'Update: Booking canceled!');
    }

    // Delete own booking
    public function destroy_self(Booking $booking)
    {
        $today = Carbon::now()->toDateString();
        $book_date = AvailableDesk::find($booking->available_desk_id)->date;
        if($today == $book_date){
            return back()->with('error','The booking is currently on going!');
        }
        $booking->delete();
        return redirect('/profile')->with('message', 'Update: One of your bookings is canceled!');
    }
}
