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
        <section class="py-5 md:grid md:grid-cols-2 lg:grid-cols-3">
            @for ($i = 0; $i < 10; $i++)
            <a href="#" class="">
                <div class="flex gap-4 items-center py-3 border-b border-b-orange-red border-dotted">
                    <div>
                        <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="60px" height="50px">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-lg font-bold">Tambe Salome</p>
                        <p class="text-base">657290982</p>
                    </div>
                </div>
            </a>
            @endfor
        </section>
    </main>
@endsection