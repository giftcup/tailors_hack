<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workshop;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function joinWorkshop()
    {
        return view('workshops.join_workshop');
    }

    public function storeWorkshop()
    {

        $workshop = Workshop::where('code', request('code'))->first();

        if (!$workshop) {
            return back()->withErrors(['msg' => 'Workshop does not exist!']);
        }

        try {
            User::findOrFail(auth()->id())->update(['workshop_id' => $workshop->id]);
        } catch (Exception $e) {
            redirect()->route('sess.create');
        }

        return redirect()->route('hello');
    }

    public function profile()
    {
        $tailors = auth()->user()->workshop->users;

        return view('workshops.profile', compact('tailors'));
    }

    public function editProfile(Request $request) {
        $request->validate([
            'name' => 'required', 
            'tel' => 'required',
            'code' => 'required'
        ]);

        $workshop = Workshop::where('code', request('code'))->first();

        if (!$workshop) {
            return back()->withErrors(['msg' => 'Workshop does not exist!']);
        }

        try {
            User::findOrFail(auth()->id())->update([
                'name' => $request['name'],
                'tel' => $request['tel'],
                'code' => $workshop->id
            ]);
        } catch (Exception $e) {
            redirect()->route('tailor.profile');
        }

        return redirect()->route('tailor.profile');
    }

    public function editProfileView()
    {
        return view('workshops.edit_profile');
    }
}
