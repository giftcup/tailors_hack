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
        <section class="py-5 md:grid md:grid-cols-3">
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>
            <div class="grid grid-cols-3 items-center py-5 border-b border-b-orange-red border-dotted">
                <div class="">
                    <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="150px" height="50px">
                </div>
                <div class="col-span-2 px-3 py-5">
                    <p class="text-2xl font-bold">Jane Doe</p>
                    <p class="text-xl">657896032</p>
                </div>
            </div>

        </section>
    </main>
@endsection