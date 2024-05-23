<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Exception;

class ProvaCsvTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = database_path('seeds/trains.csv');

        if (!file_exists($csvFile)) {
            throw new Exception("Il file CSV non esiste: $csvFile");
        }

        $trains = array_map('str_getcsv', file($csvFile));

        foreach ($trains as $train) {
            DB::table('trains')->insertOrIgnore([
                'company' => $train[0],
                'departure_station' => $train[1],
                'arrival_station' => $train[2],
                'departure_time' => $train[3],
                'arrival_time' => $train[4],
            ]);
        }
    }
}
