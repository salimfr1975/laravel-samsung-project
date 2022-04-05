<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                [
                    'nom'=>'Brandon',
                    'email'=>'brandon@gmail.com',
                    'password'=>Hash::make('85241')
                ],
                [
                    'nom'=>'Jules',
                    'email'=>'jules@gmail.com',
                    'password'=>Hash::make('9654')
                ],
                [
                    'nom'=>'Zakaria',
                    'email'=>'zakaria@gmail.com',
                    'password'=>Hash::make('963')
                ],
                [
                    'nom'=>'Thicot',
                    'email'=>'thicot@gmail.com',
                    'password'=>Hash::make('456789')
                ]

            ]
            );
    }
}
