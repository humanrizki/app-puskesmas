<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserAuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',['except'=>'logout']);
    }
    public function showLogin(){
        return view('user.auth.login',[
            'title'=>'Login'
        ]);
    }
    public function login(Request $request){
        $validatedData = $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
        if(Auth::attempt(['email'=>$validatedData['email'], 'password'=>$validatedData['password']])){
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect()->back()->with('errorLogin','Invalid email or password');
    }
    public function showRegister(){
        return view('user.auth.register',[
            'title'=>'Register'
        ]);
    }
    public function register(Request $request){
        $rules = [
            'name'=>['required','max:100'],
            'username'=>['required','max:50','unique:users'],
            'email'=>['required','email:rfc,dns'],
            'nik'=>['required','max:16','unique:users'],
            'age'=>['required','integer'],
            'password'=>['required',Password::min(8)]
        ];
        if(!is_null($request->nomor_bpjs)){
            $rules['nomor_bpjs'] = ['required','max:16','unique:users'];
        }
        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/auth/login')->with('successRegister','Berhasil register');
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}
