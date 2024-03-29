<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function feedbacktemplate()
    {
        $cssPaths = [
            // 'path/to/your/css/file.css',
            // Add other CSS paths if needed
        ];

        $title = 'Feedback Form';

        return view('feedbacktemplate', compact('cssPaths', 'title'));
    }

    public function index()
    {
        return view('feedback');
    }

    public function send()
    {
        $data = request()->validate([
            'issue' => 'required|min:3',
            'details' => 'required|min:5',
            'photo' => 'nullable',
        ]);

        Mail::to('jshallador19@gmail.com')->send(new Feedback($data));

        return redirect()->back()->with('success', 'Message Sent Successfully');
    }
}


// 'name' => 'required|min:3',
            // 'email' => 'required|email',
            // 'message' => 'required|min:5',