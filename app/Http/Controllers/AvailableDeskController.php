<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Desk;
use Illuminate\Http\Request;
use App\Models\AvailableDesk;
use Illuminate\Support\Facades\DB;

class AvailableDeskController extends Controller
{
    public function index()
    {
        if (count(AvailableDesk::all()) == 0)
        {
            foreach (Desk::where('is_out_of_order', 0)->get() as $desk) {
            $date = Carbon::now();
            for ($i = 1; $i <= 14; $i++) {
                AvailableDesk::create([
                    'date' => $date->toDateString(),
                    'desk_id' => $desk->id,
                ]);
                $date->addDays(1);
                }
            }
        }
        return view('desks.list_desks', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Available Desks | ApexHubSpot',
            'available_desks' => AvailableDesk::query()
                ->orderBy('desk_id', 'asc')
                ->orderBy('date', 'asc')
                ->paginate(10)
        ]);
    }

    public function show(Request $request) {
        return view('desks.list_desks', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Available Desks | ApexHubSpot',
            'available_desks' => AvailableDesk::where('date', Carbon::parse($request->input('date'))->toDateString())
                                    ->orderBy('desk_id', 'asc')
                                    ->orderBy('date', 'asc')
                                    ->paginate(10)
        ]);
    }
}
