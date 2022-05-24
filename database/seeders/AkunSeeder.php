<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
               'name'=>'ini akun Admin',
               'email'=>'admin@example.com',
                'level'=>'admin',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'admin2',
               'name'=>'ini akun Admin2 ',
               'email'=>'admin2@example.com',
                'level'=>'admin',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],

            [
                'username' => 'Fransiska',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'fransiska@example.com',
                'level'=>'pelanggan',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}