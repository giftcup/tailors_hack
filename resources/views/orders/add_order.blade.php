@extends('layouts.pages')

@section('content')
    <header class="text-xl font-extrabold pt-5 text-center">
        <h1>New Order</h1>
    </header>
    <form action="" enctype="multipart/form-data" class="flex flex-col justify-center">
        @csrf
        <div class="flex flex-col py-4">
            <label class="font-bold text-sm" for="dress">Dress Type</label>
            <input type="text" name="dress"
                class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-lg">
        </div>

        <div class="flex flex-col py-4">
            <label for="font-bold text-sm">Measurements</label>
            <div id="measurements" class="">
                <input type="text" name="measurement[]" placeholder="Measurement name"
                    class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-base">
                <span class="col-span-1">:</span>
                <input type="text" name="value[]" placeholder="Value"
                    class="bg-dark-green border-b border-dark-green border-b-orange-red hover:outline-none focus:outline-none py-2 text-base">
            </div>
            <span onclick="return createInput();" class="text-right py-2"><i class="fa-solid fa-circle-plus text-2xl text-white"></i></span>

        </div>

        <div class="flex flex-col py-4">
            <label class="font-bold text-sm py-4" for="profile">Upload Photo</label>
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

    <script>
        function createInput() {
            console.log("Hello");
            let input = document.getElementById('measurements');
            console.log(input);
        }
    </script>
@endsection
