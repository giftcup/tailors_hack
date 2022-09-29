@extends('layouts.pages')

@section('content')
    <section>
        <form class="flex justify-between p-2 border rounded-lg" action="{{ route('cust.all') }}" method="GET">
            <input type="text" name="search" {{ $search != null ? 'value =' . $search : 'placeholder =' . 'Search' }}
                class="bg-dark-green text-xl hover:outline-none focus:outline-none w-full">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass text-xl text-white"></i>
            </button>
        </form>
    </section>
    <section class="py-5 md:grid md:grid-cols-2 lg:grid-cols-3">

        @foreach ($customers as $customer)
            <a href="{{ route('cust.info', ['customerName' => $customer->slug]) }}" class="">
                <div class="flex gap-4 items-center py-3 border-b border-b-orange-red border-dotted">
                    <div>
                        <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="60px"
                            height="50px">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-lg font-bold">{{ $customer->name }}</p>
                        <p class="text-base">{{ $customer->tel }}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @for ($i = 0; $i < 10; $i++)
            <a href="#" class="">
                <div class="flex gap-4 items-center py-3 border-b border-b-orange-red border-dotted">
                    <div>
                        <img class="rounded-full" src="{{ asset('images/heart.jpg') }}" alt="" width="60px"
                            height="50px">
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
