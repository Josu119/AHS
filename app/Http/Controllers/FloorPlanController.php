<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\FloorPlan;

use Illuminate\Support\Facades\Storage;

class FloorPlanController extends Controller
{
    
  

public function index()
{
    $floorPlans = FloorPlan::all();
        
    return view('office_map', compact('floorPlans'));
}


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function edit(string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
     public function update(Request $request, FloorPlan $floorPlan)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        // Delete previous image if it exists
        if ($floorPlan->image_path) {
            Storage::disk('public')->delete($floorPlan->image_path);
        }

        $floorPlan->setImage($request->file('image'));

        return redirect()->back()->with('success', 'Image updated successfully.');
    }

    public function show($id)
    {
        $floor_plans = FloorPlan::findOrFail($id);

        $image = Storage::get($floor_plans->image_path);
        $mimeType = Storage::mimeType($floor_plans->image_path);

        return response($image)->header('Content-Type', $mimeType);
    }
}
