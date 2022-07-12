@extends('layouts.main')

@section('main')
<section class="bg-gradient-to-r h-screen flex justify-center items-center">
    <main class="bg-black w-4/6 h-5/6 flex flex-row items-center justify-center rounded-lg">
        <section class="basis-2/5 h-full bg-machine bg-cover bg-[center_left_-10rem] bg-no-repeat rounded-l-lg">
            @yield('image')
        </section>
        <section class="bg-dark-green text-white basis-3/5 h-full p-5 rounded-r-lg">
            <header class="text-5xl font-extrabold pt-5">
                @yield('header')
            </header>
            <section>
                @yield('form')
            </section>
            <section>
                @yield('text')
            </section>
        </section>
    </main>
</section>
@endsection