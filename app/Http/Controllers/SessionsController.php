<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        return view('authenticate.login');
    }

    public function store() {
        if ( auth()->attempt(request(['tel', 'password'])) == false ) {
            return redirect()->route('sess.create');
        }

        return redirect()->route('hello');
    }
}
