@extends('layouts.pages')

@section('content')
    <section class="">
        <form class="flex justify-between p-2 border rounded-lg" action="{{ route('ord.cust', ['customerName' => $customer]) }}" method="GET">
            <input type="text" placeholder="Search" name="search"
                class="bg-dark-green text-xl hover:outline-none focus:outline-none w-full">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass text-xl text-white"></i>
            </button>
        </form>
    </section>
    <header class="text-xl font-extrabold pt-5 text-center">
        @if (!$orders->isEmpty())
            <h1>{{ $orders[0]->customer->name }}'s Orders</h1>
        @else
            <h1>No Orders Found!!</h1>
        @endif
    </header>
    <section class="py-5 grid grid-cols-2 gap-2 lg:gap-4 lg:grid-cols-5 ">
        @foreach ($orders as $order)
            <a href="{{ route('ord.details', ['customerName' => $customer, 'orderNum' => $order->order_num]) }}"
                class="">
                <div class="flex flex-col gap-0 items-stretch pb-3  rounded-lg">
                    <div>
                        <img height="150px" class="rounded-t-lg w-full" src="{{ asset('images/heart.jpg') }}"
                            alt="">
                    </div>
                    <div class="flex flex-col gap-3 w-full p-4 bg-order-green rounded-b-lg">
                        <div>
                            <p class="text-base font-bold">{{ $order->order_num }}</p>
                            <p class="text-base">{{ $order->dress_type }}</p>
                            <p class="text-base">{{ $order->delivery_date->format('j M Y') }}</p>
                        </div>
                        @if ($order->completed)
                            <p class="text-xs font-bold text-right">Completed</p>
                        @else
                            <p class="text-xs font-bold text-right text-orange-red">Uncompleted</p>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach

        {{-- @for ($i = 0; $i < 10; $i++)
            <a href="#" class="">
                <div class="flex flex-col gap-0 items-stretch pb-3  rounded-lg">
                    <div>
                        <img height="150px" class="rounded-t-lg w-full" src="{{ asset('images/heart.jpg') }}"
                            alt="">
                    </div>
                    <div class="flex flex-col w-full p-4 bg-order-green rounded-b-lg">
                        <p class="text-base">#OOOOO</p>
                        <p class="text-base">01/01/2023</p>
                    </div>
                </div>
            </a>
        @endfor --}}
    </section>
    </main>
@endsection
