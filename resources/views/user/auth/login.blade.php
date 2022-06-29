@extends('user.layouts.app')
@section('content')
<div class="flex justify-center mt-10">
    <h1 class="box-decoration-slice bg-gradient-to-r from-indigo-600 to-pink-500 text-white p-2 rounded-lg text-light font-semibold text-2xl select-none">Selamat Datang</h1>
</div>
<div class="w-full xl:container mx-auto">
    
    <form action="" method="POST" class="w-96 mx-auto border-4 shadow-slate-500 shadow-xl border-cyan-500 rounded-xl p-4 bg-white rounded-xl mt-3 mb-16 select-none">
        @if (session()->has('successRegister'))
        <div id="alert-2" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
                {{ session('successRegister') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300" data-collapse-toggle="alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        @if (session()->has('errorLogin'))
        <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                {{ session('errorLogin') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-collapse-toggle="alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        @csrf
        <div class="form-group"></div>
        <div class="form-group mb-2 text-center">
            <p class="items-center text-xl font-semibold">Masuk</p>
        </div>
        <div class="form-group bg-gray-200 rounded-md p-2 px-2 mb-3" autofocus>
            <label for="email" class="block text-gray-500 font-semibold">Email</label>
            <input type="email" name="email" id="email" class="bg-white rounded w-full text-xl  border-transparent focus:border-transparent focus:ring-0 p-2 " value="{{ old('email') }}" autofocus>
            @error('email')
                <p class="text-sm italic font-medium text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group bg-gray-200 rounded-md p-2 px-2 mb-2">
            <label for="password" class="block text-gray-500 font-semibold">Password</label>
            <input type="password" name="password" id="password" class="rounded w-full text-xl border-transparent focus:border-transparent focus:ring-0 p-2" value="{{ old('password') }}" autofocus>
            @error('password')
            <p class="text-sm italic font-medium text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-group">
            <p><a href="/forgot-password" class="p-1 text-center">Forgot Password?</a></p>
        </div>
        
        <div class="flex form-group ">
            <button type="submit" class="p-2 bg-yellow-400 rounded items-center w-full font-semibold transition ease-in-out hover:bg-blue-500 duration-500 hover:text-white">
                Login
            </button>
        </div>  

        <div class="text-center mt-2 font-semibold">
            <h1>
                Apakah anda sudah daftar?<br>kalau belum,  
                <a href="/auth/register" class="underline text-blue-400 underline-offset-4 duration-300">Klik Disini</a>
            </h1>
        </div>
    </form>
    
</div>
@endsection