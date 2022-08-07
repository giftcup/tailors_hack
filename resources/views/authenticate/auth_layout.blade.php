@extends('layouts.main')

@section('main')
<section class="lg:bg-thread-theme lg:bg-center">
    <section class="lg:grid lg:min-h-screen lg:items-center lg:justify-items-center backdrop-blur-xl bg-dark-green/80">
        <section
            class="bg-dark-green h-screen w-full lg:grid lg:grid-cols-3 lg:w-3/5 lg:min-h-5/6 lg:h-max lg:justify-center lg:shadow-lg lg:shadow-orange-red lg:rounded-xl lg:m-3">
            <section class="lg:shrink-0 lg:rounded-l-xl">
                @yield('image')
            </section>
            <section class="bg-dark-green text-white p-5 lg:col-span-2 lg:rounded-r-xl">
                <header class="text-5xl font-extrabold pt-5">
                    @yield('header')
                </header>
                <section class="py-4">
                    @yield('form')
                    @yield('text')
                </section>
            </section>
        </section>
    </section>
</section>
@endsection