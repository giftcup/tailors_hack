@extends('layouts.main')

@section('main')
    <main class="bg-dark-green text-white min-h-screen h-full p-5">
        <nav class="flex justify-between py-3">
            <h1 class="text-2xl font-bold">TailorHack</h1>
            <i class="text-2xl fa-sharp fa-solid fa-bars"></i>
        </nav>

        @yield('content')
    </main>
@endsection
