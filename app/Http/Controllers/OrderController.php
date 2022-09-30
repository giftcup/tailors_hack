<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Workshop;
use App\Models\Customer;

class OrderController extends Controller
{
    public function __contruct()
    {
        return $this->middleware('auth');
    }

    public function create($customer) {
        return view('orders.add_order', compact('customer'));
    }

    public function store(Request $request, $customer) {
        $request->validate([
            'date' => 'required',
            'measurement' => 'required',
            'value' => 'required',
            'type' => 'required',
            'price' => 'required',
            'notes' => 'nullable',
            'material' => 'nullable | mimes: jpeg, png, jpg | max: 50482',
            'design' => 'nullable | mimes: jpeg, png, jpg | max: 50482'
        ]);

        $value = $request['value'];
        $measurement = $request['measurement'];
        $measurements = json_encode(array_combine($measurement, $value));

        // dd($request['notes']);

        Order::create( [
            'customer_id' => Customer::where('slug', $customer)->first()->id,
            'measurements' => $measurements,
            'delivery_date' => $request['date'],
            'dress_type' => $request['type'],
            'price' => $request['price'],
            'extra_notes' => isset($request['notes']) ? $request['notes'] : NULL,
            'material' => isset($request['material']) ? $request['material'] : NULL,
            'design' => isset($request['design']) ? $request['design'] : NULL
        ]);

        return redirect()->back();
    }

    public function orders($customer, Request $request)
    {
        $search = $request->has('search') ? $request['search'] : null;

        $orders = Order::whereRelation('customer', 'slug', $customer)
                    ->where('order_num', 'LIKE', '%'.$search.'%')
                    ->get();

        return view('orders.show_orders', compact('orders', 'customer', 'search'));
    }

    public function orderDetails($customer, $order)
    {
        $orderInfo = Order::where('order_num', $order)->first();

        return view('orders.info_order', compact('orderInfo'));
    }

    public function changeCompletionState($order_num)
    {
        $orderInfo = Order::where('order_num', $order_num)->update(['completed' => 1]);
        dd($orderInfo);
        // return redirect()->route('details', ['customerName' => ])
    }
    
    public function workshopOrders(Request $request) {
        $search = $request->has('search') ? $request['search'] : null;

        $orders = Order::select(['workshops.name', 'customers.id', 'orders.*'])
                            ->join('customers', 'orders.customer_id', 'customers.id')
                            ->join('workshops', 'customers.workshop_id', 'workshops.id')
                            ->where('customers.name', 'LIKE', '%'.$search.'%')
                            ->orWhere('orders.order_num', 'LIKE', '%'.$search.'%')
                            ->get();
        // dd($orders);

        return view('orders.all_orders', compact('orders', 'search'));
    }
}
