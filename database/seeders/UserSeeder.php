<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'prodi' => 'D3TI',
                'nim' => '11321000',
                'jenis_kelamin' => 'Laki-laki',
                'password' => Hash::make('password'),
                'role' => 'a'   

            ]
        );
        foreach($data AS $d){
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'prodi' => $d['prodi'],
                'nim' => $d['nim'],
                'jenis_kelamin' => $d['jenis_kelamin'],
                'password' => $d['password'],
                'role' => $d['role']
            ]);
        }
    }
}
