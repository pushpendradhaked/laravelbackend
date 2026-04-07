<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function index()
    {
        $homedata = Home::all();
        return view('welcome', compact('homedata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Subject' => 'nullable',
            'Message' => 'required',
        ]);

        Home::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Subject' => $request->Subject,
            'Message' => $request->Message,
        ]);

        return redirect()->back()->with('success', 'data submitted');
    }

}