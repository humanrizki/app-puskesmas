@extends('user.layouts.app')
@section('content')
        <div class="xl:container w-full mx-auto">
            <div class="group bg-slate-200 p-5 mb-4 mt-4 xl:rounded-xl transition ease-in-out hover:bg-zinc-300 duration-500">
                <div class="container-fluid py-3">
                    <h1 class="display-5 font-bold text-3xl capitalize text-center group-hover:text-black">
                        selamat datang di Puskesmas OWeb <br> ratu jaya
                    </h1>
                    <p class="col-md-8 fs-4 mt-2 text-center mx-auto capitalize">
                        <span class="font-semibold">Pelayanan</span><br> 
                        <span class="italic font-semibold text-lg">Pemesanan antrian secara online</span> 
                    </p>
                </div>
            </div>

            <section class="bg-white border-b py-8 clear">
                <div class="container max-w-5xl mx-auto m-8">
                    <div class="flex flex-wrap items-center" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        <div class="w-2/4 sm:w-1/2 p-6 border border-2rounded-lg">
                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                Pelayanan
                            </h3>
                            <p class="text-gray-600 mb-8">
                                Pengambilan nomor antrian Puskesmas Ratu Jaya secara online,
                                info tentang jadwal Poli Medis yang tersedia.
                                <span class="text-blue-500">#SehatGaRibet #SehatMilenial #SemuaBisaSehat</span>
                                <br>
                                <br>
                                Informasi Tentang Poli Medis :
                                <a href="/polies" class="bg-yellow-400 rounded-md p-1 font-semibold">Klik DiSini</a>
                            </p>
                        </div>
                        <div class="w-2/4 mb-4">
                            <div class="float-right gradient my-0 py-0 rounded-t">
                                <img src="/img/walking.svg" alt="" class="w-96 h-96">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">
                        <div class="w-2/4 sm:w-1/2 p-6 mt-6 gradient my-0 py-0 rounded-t">
                            <img src="/img/doctor.svg" alt="" class="w-96 h-96">
                        </div>
                        <div class="w-2/4 sm:w-1/2 p-6 mt-6 border-2 rounded-lg">
                            <div class="align-middle">
                                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                    5 Poli Medis
                                </h3>
                                <p class="text-gray-600 mb-8">
                                    <span class="font-semibold italic">Poli Anak, Poli Umum, Poli Gigi, Poli THT, dan Poli Lansia</span> 
                                    <br>
                                    <br>
                                    Cek Info Lebih Lanjut :
                                    <a class="bg-yellow-400 rounded-md p-1 font-semibold" href="/info">Klik Disini</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- TIMELINE --}}
                    <ol class="items-center sm:flex" data-aos="fade-down" data-aos-duration="2000">
                            {{-- 1 --}}
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full dark:bg-blue-900 ring-0 sm:ring-8 ring-white dark:ring-gray-900 shrink-0">
                                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pr-8 sm:mt-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Masuk/Daftar akun Puskesmas Oweb</h3>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">----------></time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Untuk pengguna baru sebelum dapat menggunakan layanan kami silakan buat akun terlebih dahulu pada form Registrasi yang telah disediakan.</p>
                            </div>
                        </li>
                            {{-- 2 --}}
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full dark:bg-blue-900 ring-0 sm:ring-8 ring-white dark:ring-gray-900 shrink-0">
                                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pr-8 sm:mt-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Pilih Poli Medis</h3>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">----------></time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Setelah membuat akun kamu bisa melihat poli medis apa saja yang tersedia.</p>
                            </div>
                        </li>
                            {{-- 3 --}}
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full dark:bg-blue-900 ring-0 sm:ring-8 ring-white dark:ring-gray-900 shrink-0">
                                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pr-8 sm:mt-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Pesan Nomor Antrian</h3>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">----------></time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Setelah kedua langkah tadi, lalu kamu bisa memesan nomor antrian sesuai poli medis yang kamu pilih di halaman Spesialis, dan kamu bisa melihat antrianmu pada halaman "Antrean"</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
@endsection