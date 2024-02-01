<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Desk;


class DashboardController extends Controller
{
    public function index()
    {
        $totalBookings = Booking::count();
        $totalUsers = User::count();
        $totalDesks = Desk::count();
   
           $adminCount = User::where('role', 'admin')->count();
    $managerCount = User::where('role', 'office_manager')->count();
     $normal = User::where('role', 'user')->count();
      $available = Desk::where('is_available', 1)->count();
  $disabled = Desk::where('is_available', 0)->count();


        return view('dashboard', compact('totalBookings', 'totalUsers', 'totalDesks','adminCount','managerCount','normal','available','disabled'));
    }
}
