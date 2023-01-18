<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for($i = 0; $i < 20; $i++) {
            $new_train = new Train;

            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-1 week', '+2 weeks');
            $new_train->arrival_time = Carbon::parse($new_train->departure_time)->addHours(rand(0, 8))->addMinutes(rand(0, 59));
            $new_train->train_code = $faker->bothify('???-######');
            $new_train->coach = rand(0, 9);
            $new_train->on_time = rand(0, 1);
            $new_train->canceled = rand(0, 1);

            $new_train->save();
        }
    }
}
