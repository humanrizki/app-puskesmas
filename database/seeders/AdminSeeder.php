<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email'=>'humanrizki999@gmail.com',
            'username'=>'humanrizki999',
            'password'=>Hash::make('password'),
            'email'=>'dimasp88@gmail.com',
            'username'=>'Dimas Prasetyo',
            'password'=>Hash::make('password')
        ]);
    }
}
