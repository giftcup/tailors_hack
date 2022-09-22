@extends('layouts.pages')

@section('content')
    <section class="flex justify-between p-2 border rounded-lg">
        <form action="" method="GET">
            <input type="text" placeholder="Search" name="search"
                class="bg-dark-green text-xl hover:outline-none focus:outline-none">
        </form>
        <button>
            <i class="fa-solid fa-magnifying-glass text-xl text-white"></i>
        </button>
    </section>
    <header class="text-xl font-extrabold pt-5 text-center">
        <h1>Tambe's Orders</h1>
    </header>
    <section class="py-5 grid grid-cols-2 gap-2 lg:gap-4 lg:grid-cols-5 ">
        @for ($i = 0; $i < 10; $i++)
            <a href="#" class="">
                <div class="flex flex-col gap-0 items-stretch pb-3  rounded-lg">
                    <div>
                        <img height="150px" class="rounded-t-lg w-full" src="{{ asset('images/heart.jpg') }}" alt="">
                    </div>
                    <div class="flex flex-col w-full p-4 bg-order-green rounded-b-lg">
                        <p class="text-lg">Tambe Salome</p>
                        <p class="text-base">#OOOOO</p>
                        <p class="text-base">01/01/2023</p>
                    </div>
                </div>
            </a>
        @endfor
    </section>
    </main>
@endsection
