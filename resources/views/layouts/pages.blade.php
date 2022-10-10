@extends('layouts.main')

@section('main')
    <main class="bg-dark-green text-white min-h-screen h-full p-5">
        <nav class="flex justify-between py-3">
            <h1 class="text-2xl font-bold">TailorHack</h1>
            {{-- <p class="text-orange-red">Menu</p> --}}
            <i class="text-2xl fa-sharp fa-solid fa-bars"></i>
            <div>
                <x-contacts.contact-info-component :link="route('ord.cust', [
                    'customerName' => $customer->slug,
                ])" icon="fa-cart-shopping" title="orders"
                    detail="dresses ordered" />
            </div>
        </nav>

        @yield('content')
    </main>
@endsection
