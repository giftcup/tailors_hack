@extends('layouts.main')

@section('main')
<section class="bg-dark-green h-full w-full lg:grid lg:grid-cols-2">
    <section class="lg:shrink-0">
        @yield('image')
    </section>
    <section class="bg-dark-green text-white p-5">
        <header class="text-5xl font-extrabold pt-5">
            @yield('header')
        </header>
        <section class="py-4">
            @yield('form')
            @yield('text')
        </section>
    </section>
</section>
@endsection