<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time('H:i:s'),
                'arrival_time' => $faker->time('H:i:s'),
                'train_code' => $faker->unique()->regexify('[A-Z0-9]{5}'),
                'carriages_number' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean,
                'canceled' => $faker->boolean,
                'duration_minutes' => $faker->numberBetween(60, 600),
                'train_type' => $faker->word,
                'ticket_price' => $faker->randomFloat(2, 10, 1000),
                'train_status' => $faker->randomElement(['In Ritardo', 'In Orario', 'Annullato']),
            ]);
        }
    }
}
