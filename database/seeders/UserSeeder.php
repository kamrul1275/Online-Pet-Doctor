<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([

            // admin
            [
              'name'=>'admin',
              'email'=>'admin@gmail.com',
              'password' => Hash::make('password'),
              'role'=>'admin',
             
               'status'=>'active',


            ],


                // admin
                [
                    'name'=>'admin2',
                    'email'=>'admin2@gmail.com',
                    'password' => Hash::make('password'),
                    'role'=>'admin',

                    'status'=>'active',

                  ],



            // docotr
            [
                'name'=>'doctor',
                'email'=>'doctor@gmail.com',
                'password' => Hash::make('password'),
                'role'=>'doctor',

                'status'=>'active',

              ],

          // user
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password' => Hash::make('password'),
                'role'=>'user',

                'status'=>'active',

              ],

        ]);
    }
}
