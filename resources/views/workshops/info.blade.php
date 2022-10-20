@extends('layouts.pages')

@section('content')
    <section class="md:flex md:flex-col md:items-center md:bg-dark-green/80">
        <section class="md:w-1/2 md:flex md:flex-col md:border md:border-white/30 md:shadow-lg md:shadow-white/50 md:p-9">
            <span class="flex justify-start md:justify-end">
                <a href="#" class="bg-orange-red py-1 px-4 rounded font-bold w-fit text-lg">Edit</a>
            </span>

            <section class="text-xl tracking-wide leading-relaxed py-5">
                <div class="py-4">
                    <h1 class="font-bold text-lg text-orange-red">About Me</h1>
                    <div>
                        <table class="border-collapse">
                            <tbody>
                                <x-tailor-info name="Name:" :value="auth()->user()->name" />
                                <x-tailor-info name="Phone:" :value="auth()->user()->tel" />
                                <x-tailor-info name="Workshop:" :value="auth()->user()->workshop->name" />
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="py-4">
                    <h1 class="font-bold text-lg text-orange-red">Other Tailors</h1>
                    <div>
                        <table class="border-collapse">
                            <tbody>
                                @foreach ($tailors as $tailor)
                                    <x-tailor-info :name="$tailor->name" :value="$tailor->tel" />
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </section>
@endsection
