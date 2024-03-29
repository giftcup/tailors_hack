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

        $customer = Customer::create([
            'name' => $request['name'],
            'tel' => $request['tel'],
            'workshop_id' => auth()->user()->workshop->id
        ]);

        return redirect()->route('cust.info', ['customerName' => $customer->slug]);
    }

    public function customers(Request $request) {
        $search = $request->has('search') ? $request['search'] : null;
        $workshop = auth()->user()->workshop;
        $customers = Customer::whereBelongsTo($workshop)
                        ->where(function ($query) use ($search) {
                            $query->where('name', 'LIKE', '%'.$search.'%')
                                ->orWhere('tel', 'LIKE', '%'.$search.'%');
                        })
                        ->get()
                        ->sortBy('name');

        return view('contacts.show_contacts', compact('search'))->with('customers', $customers);
    }

    public function customerInfo($customerSlug) {
        $customer = Customer::where('slug', $customerSlug)->first();

        return view('contacts.info_contact', compact('customer'));
    }

    public function profileView($customerSlug)
    {   
        $customer = Customer::where('slug', $customerSlug)->first();

        return view('contacts.profile', compact('customer'));
    }

    public function profileEdit(Request $request, $customerSlug)
    {
        $request->validate([
            'name' => 'required',
            'tel' => 'required'
        ]);

        Customer::where('slug', $customerSlug)->update([
            'name' => $request['name'],
            'tel' => $request['tel']
        ]);

        return redirect()->route('cust.info', ['customerName' => $customerSlug]);
    }
}
