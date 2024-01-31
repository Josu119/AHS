<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desk;
use Illuminate\Validation\Rule;
use App\Models\Booking;

class DeskController extends Controller
{
    public function index() {
        return view('desks.index', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Manage Desks | ApexHubSpot',
            'desks' => Desk::orderBy('desk_number', 'asc')->paginate(10)
        ]);
    }

    // Show create form
    public function create() {
        return view('desks.create', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Create Desk | ApexHubSpot',
        ]);
    }

    // Store item data
    public function store(Request $request) {
        $formFields = $request->validate([
            'desk_number' => ['required', Rule::unique('desks', 'desk_number')],
            'is_out_of_order' => 'required',
        ]);

        Desk::create($formFields);

        return redirect('/desks')->with('message', 'Update: Desk created!');
    }

    // Delete desk
    public function destroy(Desk $desk) {
        $desk_number = $desk->desk_number;
        $desk->delete();
        return redirect('/desks')->with('message', 'Update: Desk ' . $desk_number . ' deleted!');
    }

    // Switch is_out_of_order
    public function availability(Desk $desk) {
        if ($desk->is_out_of_order === 0) {
            $desk->update(['is_out_of_order' => 1]);
            return back()->with('message', 'Update: Desk' . $desk->desk_number . ' CLOSED for booking!');
        } elseif ($desk->is_out_of_order === 1) {
            $desk->update(['is_out_of_order' => 0]);
            return back()->with('message', 'Update: Desk'. $desk->desk_number .' OPEN for booking!');
        }
    }


  public function book(Request $request, Desk $desk)
{
    $date = $request->input('date');
    $existingBooking = Booking::where('desk_number', $desk->desk_number)
        ->where('date', $date)
        ->where('user_id', auth()->id())
        ->first();
    $existingBookings = Booking::where('desk_number', $desk->desk_number)
    ->where('date', $date)
    ->first();

    if ($existingBooking) {
        return redirect('/desks/available')->with('error', 'You have already booked a desk for this day.');
    }
     if ($existingBookings) {
        return redirect('/desks/available')->with('error', 'Someone booked this already, try another desk.');
    }

    $previousBooking = Booking::where('date', $date)
        ->where('user_id', auth()->id())
        ->first();

    if ($previousBooking) {
        return redirect('/desks/available')->with('error', 'You have already booked a desk for this day.');
    }
    

    // Store the booking in the database
    $booking = new Booking();
    $booking->desk_number = $desk->desk_number;
    $booking->date = $date;
    $booking->user_id = auth()->id();
    $booking->save();

    return redirect('/desks/available')->with('success', 'Desk booked successfully.');
}



}
