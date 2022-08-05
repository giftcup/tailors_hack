@extends('layouts.main')

@section('main')
<main class="bg-gradient-to-r h-screen flex justify-center items-center">
    <section class="bg-black w-4/6 h-5/6 flex lg:flex-row items-center justify-center rounded-lg">
        @yield('image')
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
    </section>
</main>
@endsection