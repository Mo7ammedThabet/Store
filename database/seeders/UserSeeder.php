<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model
        User::create([
            'name'=>'Mohammed Thabet',
            'email'=>'m@th.com',
            'password'=>Hash::make('password'),
            'phone_number'=>'970591234567',
        ]);


        //db facades
        DB::table('users')->insert([
            'name'=>'System Admin',
            'email'=>'sys@th.com',
            'password'=>Hash::make('password'),
            'phone_number'=>'970591234568',
        ]);
    }
}
