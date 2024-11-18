<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\FacilityHouse;
use App\Models\FacilityRoom;
use App\Models\House;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        //kealterlagi
        // ngumpuldialter
        // Seed untuk 5 BoardingHouse
        for ($i = 0; $i < 5; $i++) {
            // Buat BoardingHouse baru
            $boardingHouse = House::create([
                'name' => $faker->company . ' Boarding House',
                'type' => $faker->randomElement(['Khusus Putra', 'Khusus Putri', 'Bebas']),
                'curfew' => $faker->time('H:i'),
                'rules' => $faker->sentence(10),
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
            ]);

            // Buat 3 kamar untuk setiap BoardingHouse
            for ($j = 0; $j < $faker->numberBetween(1, 3); $j++) {
                $room =  Room::create([
                    'house_id' => $boardingHouse->id,
                    'room_number' => $j + 1,
                    'size' => $faker->numberBetween(2, 5) . "x" . $faker->numberBetween(2, 5),
                    'price' => $faker->numberBetween(1000000, 3000000), // Harga dalam IDR
                    'availability' => $faker->randomElement([true, false]),
                    'description' => $faker->randomElement(["Kasur: Tersedia", "Kasur: Tidak Tersedia"]) . "<br>" .  $faker->randomElement(["Lemari: Tersedia", "Lemari: Tidak Tersedia"]),
                ]);
                for($k = 0; $k < 2; $k++){
                    FacilityRoom::create([
                        'room_id' => $room->id,
                        'facility_id' => $faker->numberBetween(1,5),
                    ]);
                }
            }

            // Buat 2 fasilitas untuk setiap BoardingHouse
            $randomID = $faker->numberBetween(1, 5);
            for ($k = 0; $k < $faker->numberBetween(1, 3); $k++) {
                FacilityHouse::create([
                    'house_id' => $boardingHouse->id,
                    'facility_id' => $randomID,
                    'description' => $faker->sentence(5),
                ]);
                $randomID++;
                if ($randomID > 5) $randomID = 1;
            }
        }
    }
}
