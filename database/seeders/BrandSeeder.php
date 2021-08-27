<?php

namespace Database\Seeders;

use App\Models\Brand;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 10) as $index) {
            $name = $faker->name;
            Brand::create([
                'create_by' => '1',
                'title'     => $faker->name,
                'slug'      => Str::slug($name, '-'),
                'brand_img' => $faker->imageUrl,
            ]);
        }
    }
}
