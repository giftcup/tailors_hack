<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workshop;

class UserController extends Controller
{
    public function joinWorkshop()
    {
        return view('workshops.join_workshop');
    }

    public function storeWorkshop()
    {

        $workshop = Workshop::where('code', request('code'))->first();

        User::findOrFail(auth()->id())->update(['workshop_id' => $workshop->id]);

        return redirect()->route('hello');
    }
}
