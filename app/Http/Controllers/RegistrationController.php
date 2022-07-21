<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('authenticate.signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tel' => 'required|min:9|max:9',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'tel' => $request['tel'],
            'password' => $request['password']
        ]);

        auth()->login($user);
        return redirect()->route('tailor.join');
    }
}
