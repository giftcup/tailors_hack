<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
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
            // 'material' => isset($request['material']) ? $request['material'] : NULL,
            // 'design' => isset($request['design']) ? $request['design'] : NULL
        ]);

        return redirect()->back();
    }

    public function orders($customer, Request $request)
    {
        $orders = Order::whereRelation('customer', 'slug', $customer)
                    ->where('order_num', 'LIKE', '%'.$request['search'].'%')
                    ->get();
        // dd($orders);
        // $measurements = json_decode($orders[0]->measurements);
        // foreach(json_decode($orders[0]->measurements) as $key => $value) {
        //     echo $key." : ".$value. "<br>";
        // }

        return view('orders.show_orders', compact('orders', 'customer'));
    }

    public function orderDetails($customer, $order)
    {
        $orderInfo = Order::where('order_num', $order)->get();
        // dd($orderInfo);
        return view('orders.info_order', compact('orderInfo'));
    }
    
}
