<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desk;

class DeskController extends Controller
{
    public function index() {
        return view('desks.index', [
            'cssPaths' => [
                'resources/css/main/content.css',
                'resources/css/main/content2.css',
            ],
            'title' => 'Manage Desks | ApexHubSpot',
            'desks' => Desk::all()
        ]);
    }
}
