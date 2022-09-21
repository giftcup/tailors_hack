<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest');
    }

    public function create()
    {
        return view('authenticate.login');
    }

    public function store()
    {
        // dd([request('phone_number'), request('password')]);
        if (auth()->attempt(['tel' => request('phone_number'), 'password' => request('password')]) == false) {
            return back()->withError([
                'phone_number' => 'Phone number not registered. Create an account',
                'password' => 'Incorrect password. Try again'
            ]);
        }

        return redirect()->route('hello');
    }
}
