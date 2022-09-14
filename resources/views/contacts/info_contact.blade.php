@extends('layouts.main')

@section('main')
    <main class="bg-dark-green text-white min-h-screen h-full p-5">
        <nav class="flex justify-between py-3">
            <h1 class="text-2xl font-bold">TailorHack</h1>
            <p class="text-orange-red">Menu</p>
        </nav>
        <section>
            
        </section>
        <section class="flex justify-between p-2 border rounded-lg">
            <form action="" method="GET">
                <input type="text" placeholder="Search" name="search" class="bg-dark-green text-xl hover:outline-none focus:outline-none">
            </form>
            <button>
                <i class="fa-solid fa-magnifying-glass text-xl text-white"></i>
            </button>
        </section>
        <section>
            <div class="flex gap-6 items-center py-5">
                <div>
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="110px" height="100px">
                </div>
                <div class="flex flex-col">
                    <p class="text-2xl font-bold">Tambe Salome</p>
                    <p class="text-xl">657290982</p>
                </div>
            </div>
            <x-contacts.contact-info-component icon="fa-user" title="profile" detail="Personal details"/>
            <x-contacts.contact-info-component icon="fa-tape" title="measurements" detail="All measurements"/>
            <x-contacts.contact-info-component icon="fa-cart-shopping" title="orders" detail="dresses ordered"/>
            <x-contacts.contact-info-component icon="fa-wallet" title="payments" detail="Total amount paid"/>
        </section>
    </main>
@endsection