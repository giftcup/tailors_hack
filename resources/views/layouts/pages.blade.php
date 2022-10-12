@extends('layouts.main')

@section('main')
    <main class="bg-dark-green text-white min-h-screen h-full p-5">
        <header class="flex justify-between py-4 flex-wrap">
            <h1 class="text-2xl font-bold">TailorHack</h1>
            <nav class="flex space-x-4 font-bold flex-wrap">
                <x-nav.links name="Home" :link="route('hello')"/>
                <x-nav.links name="Customers" :link="route('cust.all')"/>
                <x-nav.links name="Add Customer" :link="route('cust.create')"/>
                <x-nav.links name="Orders" :link="route('ord.workshop')"/>
                <i class="hidden text-2xl fa-sharp fa-solid fa-bars"></i>
            </nav>
        </header>

        @yield('content')
    </main>
@endsection
