<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Faker\Factory;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        GeneralSetting::create([
            'create_by'        => '1',
            'title'            => $faker->name,
            'prefix'           => $faker->title,
            'meta_description' => $faker->paragraph,
            'meta_keyword'     => $faker->realText,
            'meta_author'      => $faker->name,
            'email'            => $faker->email,
            'logo'             => $faker->imageUrl
        ]);
    }
}
