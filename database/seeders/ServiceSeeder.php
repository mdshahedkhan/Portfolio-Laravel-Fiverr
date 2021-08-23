<?php

namespace Database\Seeders;

use App\Models\Service;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 6) as $item) {
            Service::create([
                'create_by' => 1,
                'title'     => substr($faker->name, 0, 20),
                'sub_title' => $faker->name,
                'image'     => $faker->imageUrl,
                'status'    => RandomStatus()
            ]);
        }
    }
}
