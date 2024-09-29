<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0 ; $i < 25; $i++){
            $train = new train();

            $train->company = $faker->company();
            $train->departure_station = $faker->randomElement(['Roma','Napoli', 'Milano',]);
            $train->arrival_station = $faker->randomElement(['Firenze','Palermo','Venezia']);
            $train->departure_time = $faker->dateTimeBetween('-1 day','+1 day');
            $train->arrival_time = $faker->dateTimeBetween('+1 day','+2 day');
            $train->code = 'FS'.$faker->randomNumber(5,true);
            $train->train_wagons = $faker->randomDigitNotNull();
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
