<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\Type;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);
        $brand = ["Bloods", "Leaf","Levis"];
        $nama = ["Kaos", "Kemeja", "Jaket", "Hoodie", "Sweater"];
        $ukuran = ["S", "L","XL"];
        
        for ($i=0; $i < 10; $i++) { 
            Store::create([
                'kode' => $faker->unique()->numerify('MT###'),
                'nama' => $faker->randomElement($nama),
                'brand' => $faker->randomElement($brand)
            ]);
        }
        for ($i=0; $i < 10; $i++) { 
            Type::create([
                'ukuran' => $faker->randomElement($ukuran),
                'harga' => $faker->numerify('##0000'),
                'store_id' => $faker->unique()->numberBetween(1, 10)
            ]);
        }
    }
}
