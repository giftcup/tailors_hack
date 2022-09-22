@extends('layouts.pages')

@section('content')
    <section class="md:flex md:flex-col md:items-center md:bg-dark-green/80">
        <section class="md:w-1/2 md:flex md:flex-col md:border md:border-white/30 md:shadow-lg md:shadow-white/50 md:px-9">
            <header class="text-xl font-extrabold pt-5 text-center">
                <h1>New Order</h1>
            </header>
            <form action="" enctype="multipart/form-data" class="flex flex-col justify-center">
                @csrf
                <div class="flex flex-col py-4">
                    <label class="font-bold text-sm" for="dress">Dress Type</label>
                    <input type="text" name="dress"
                        class="md:w-4/5 bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
                </div>

                <div class="flex flex-col pt-4">
                    <label class="font-bold text-sm">Measurements</label>
                    <div id="measurements">
                        <div class="">
                            <input type="text" name="measurement[]" placeholder="Measurement name"
                                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-base">
                            <span>:</span>
                            <input type="text" name="value[]" placeholder="Value"
                                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-base">
                        </div>
                    </div>
                    <span onclick="createInput()" class="text-right py-2"><i
                            class="fa-solid fa-circle-plus text-2xl text-white"></i></span>
                </div>

                <div class="flex flex-col pb-4">
                    <label class="font-bold text-sm" for="date">Delivery Date</label>
                    <input type="date" name="date"
                        class="md:w-4/5 bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
                </div>

                <div class="flex flex-col pb-4">
                    <label class="font-bold text-sm" for="notes">Extra Notes</label>
                    <textarea type="text" name="notes"
                        class="md:w-4/5 bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none text-lg">
                    </textarea>
                </div>

                <div class="flex flex-col py-4">
                    <label class="font-bold text-sm py-4" for="profile">Material Picture</label>
                    <input type="file" name="profile" accept="image/png image/jpg image/jpeg"
                        class="file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-white file:text-orange-red
            hover:file:bg-violet-100
            ">
                </div>
                <div class="flex flex-col py-4">
                    <label class="font-bold text-sm py-4" for="profile">Design Picture</label>
                    <input type="file" name="profile" accept="image/png image/jpg image/jpeg"
                        class="file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-white file:text-orange-red
            hover:file:bg-violet-100
            ">
                </div>
                <div>
                    <button type="submit" class="my-7 p-2 bg-orange-red w-1/2 rounded font-bold text-xl">Add</button>
                </div>
            </form>
        </section>
    </section>

    <script>
        function createInput() {
            const input = document.getElementById('measurements').lastElementChild;
            document.getElementById('measurements').appendChild(input.cloneNode(true));
        }
    </script>
@endsection
