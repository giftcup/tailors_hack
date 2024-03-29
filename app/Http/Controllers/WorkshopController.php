<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\User;

class WorkshopController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Show the form for creating a new workshop.
     *
     * @return view
     */
    public function create()
    {
        return view('workshops.create_workshop');
    }

    /**
     * Store a newly created workshop in database and
     * update the workshop's id of the user who created it.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workshop = Workshop::create([
            'code' => str()->random(5),
            'created_by' => auth()->id(),
            'name' => $request['name'],
            'town' => $request['town'],
            'street' => $request['street']
        ]);
        $user = User::findOrFail(auth()->id());
        $user->update(['workshop_id' => $workshop->id]);


        return redirect()->route('hello');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
