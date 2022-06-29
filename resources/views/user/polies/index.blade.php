@extends('user.layouts.app')
@section('content')
    
<body>
    <main>
        <div class="container w-full mx-auto select-none">
            <div class="grid grid-cols-3 gap-4 my-5">
                <div class="group bg-gray-200 rounded shadow-xl mx-auto w-full" data-aos="fade-up" data-aos-duration="300">
                    <img src="/img/doctor.png" alt="" width="200" height="200" class="mx-auto m-2">
                    <h1 class="font-semibold text-gray-200 italic text-3xl text-center mx-auto group-hover:text-gray-900 duration-300">Poli Umum</h1>
                </div>
                <div class="group bg-gray-200 rounded shadow-xl mx-auto w-full" data-aos="fade-up" data-aos-duration="500">
                    <img src="/img/dentistry.png" alt="" width="200" height="200" class="mx-auto m-2">
                    <h1 class="font-semibold text-gray-200 italic text-3xl text-center mx-auto group-hover:text-gray-900 duration-300">Poli Gigi</h1>
                </div>
                <div class="group bg-gray-200 rounded shadow-xl mx-auto w-full" data-aos="fade-up" data-aos-duration="700">
                    <img src="/img/child.png" alt="" width="200" height="200" class="mx-auto m-2">
                    <h1 class="font-semibold text-gray-200 italic text-3xl text-center group-hover:text-gray-900 duration-300">Poli Anak</h1>
                </div>
                <div class="group bg-gray-200 rounded shadow-xl mx-auto w-full" data-aos="fade-up" data-aos-duration="900">
                    <img src="/img/ears.png" alt="" width="200" height="200" class="mx-auto m-2">
                    <h1 class="font-semibold text-gray-200 italic text-3xl text-center group-hover:text-gray-900 duration-300">Poli THT</h1>
                </div>
                <div class="invisible bg-gray-200 rounded shadow-xl mx-auto w-full">
                    <img src="/img/lansia.png" alt="" width="200" height="200" class="mx-auto m-2">
                </div>
                <div class="group bg-gray-200 rounded shadow-xl mx-auto w-full" data-aos="fade-up" data-aos-duration="1200">
                    <img src="/img/lansia.png" alt="" width="200" height="200" class="mx-auto m-2">
                    <h1 class="font-semibold text-center text-gray-200 text-3xl italic group-hover:text-gray-900 duration-300">Poli Lansia</h1>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection