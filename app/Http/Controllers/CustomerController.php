<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __contruct()
    {
        return $this->middleware('auth');
    }
    
    public function create() {
        return view('contacts.add_contact');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'tel' => 'required | unique:customers',
        ]);

        Customer::create([
            'name' => $request['name'],
            'tel' => $request['tel'],
            'workshop_id' => auth()->user()->workshop->id
        ]);

        return redirect()->route('hello');
    }

    public function customers() {
        $customers = Customer::get()->sortBy('name');
        return view('contacts.show_contacts')->with('customers', $customers);
    }

    public function customerInfo($customerSlug) {
        $customer = Customer::where('slug', $customerSlug)->first();
        return view('contacts.info_contact', compact('customer'));
    }
}
