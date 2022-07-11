@extends('layouts.main')

@section('main')
<section class="bg-blue-400 h-screen flex justify-center items-center">
    <main class="bg-black w-4/6 h-5/6 flex flex-row items-center justify-center rounded-lg">
        <section class="basis-2/5 h-full bg-machine">
            @yield('image')
        </section>
        <section class="bg-[#000F08] text-white basis-3/5 h-full">
            <header>
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