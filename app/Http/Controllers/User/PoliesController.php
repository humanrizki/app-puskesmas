<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoliesController extends Controller
{
    public function index(){
        return view('user.polies.index',[
            'title' => 'Polies'
        ]);
    }
}
