@extends('layouts.pages')

@section('content')
    <section class="md:flex md:flex-col md:items-center md:bg-dark-green/80">
        <section class="md:w-1/2 md:flex md:flex-col md:border md:border-white/30 md:shadow-lg md:shadow-white/50 md:p-9">
            <header class="flex py-5 justify-between items-center">
                <h1 class="text-3xl font-extrabold">{{ $orderInfo->order_num }}</h1>
                <p class="text-red-900 font-bold bg-stone-50 p-3">Due: {{ $orderInfo->delivery_date->format('j M Y') }}</p>
            </header>
            <section class="text-xl tracking-wide leading-relaxed">
                <div class="pb-2">
                    <span class="italic">Style: </span>
                    <span>{{ $orderInfo->dress_type }}</span>
                </div>
                <div class="pb-2">
                    <p class="italic pb-2">Measurements: </p>
                    <div class="px-5">
                        <table class="border-collapse border border-white-500">
                            <tbody>
                                @foreach (json_decode($orderInfo->measurements) as $measurement => $value)
                                    <tr>
                                        <td class="border border-white-500 px-4">{{ $measurement }}</td>
                                        <td class="border border-white-500 px-3">{{ $value }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pb-2">
                    <span class="italic">Extra Notes: <br></span>
                    <span class="px-5">{{ $orderInfo->extra_notes }}</span>
                </div>
                <div class="flex justify-between">
                    <form action="{{ route('ord.change', ['orderNum' => $orderInfo->order_num]) }}" method="POST">
                        @csrf
                        <button class="bg-orange-red px-2 rounded" name="completed" value="">
                            @if ($orderInfo->completed)
                                Mark as Uncompleted
                            @else
                                Mark as Completed
                            @endif
                        </button>
                    </form>

                    <form action="{{ route('ord.delete', ['customerName' =>  $orderInfo->customer->slug, 'orderNum' => $orderInfo->order_num]) }}" method="POST">
                        @csrf
                        <button class="border-4 px-3 rounded" name="delete" value="">
                            Delete
                        </button>
                    </form>
                </div>
            </section>
        </section>
    </section>
@endsection
