<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Adminseeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@email.com',
            'password'=>Hash::make('12345678'),
            'phone'=>'0938787722',
            'address'=>'damascus',
            'is_admin'=>true,
        ]);
    }
}
