<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $kategori = [
            'Music Corner',
            'Kopi Sore',
            'Festival Musik',
            'Modern Dance',
        ];

        for ($i=0; $i < count($kategori); $i++) { 
            KategoriModel::create([
                'category_name'=>$kategori[$i]
            ]);
        }
         
        $this->call([
            UserSeeder::class,
        ]);

        
    }
}
