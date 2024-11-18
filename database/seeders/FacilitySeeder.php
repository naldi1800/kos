<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        Facility::create([
            'facility_name' => 'Wifi',
            'category' =>  $faker->randomElement(['Umum', 'Kamar']),
        ]);
        Facility::create([
            'facility_name' => 'Dapur',
            'category' =>  $faker->randomElement(['Umum', 'Kamar']),
        ]);
        Facility::create([
            'facility_name' => 'Parkiran Motor',
            'category' =>  $faker->randomElement(['Umum', 'Kamar']),
        ]);
        Facility::create([
            'facility_name' => 'Parkiran Mobil',
            'category' =>  $faker->randomElement(['Umum', 'Kamar']),
        ]);
        Facility::create([
            'facility_name' => 'WC/Kamar Mandi',
            'category' => $faker->randomElement(['Umum', 'Kamar']),
        ]);
    }
}
