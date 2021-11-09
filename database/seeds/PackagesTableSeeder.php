<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newPackage = new Package();
            $newPackage->code = $faker->bothify('???-####-###');
            $newPackage->destination = $faker->city();
            $newPackage->nights_number = $faker->numberBetween(4, 21);;
            $newPackage->departure = $faker->dateTimeBetween('+2 day', '+1 year');
            $newPackage->accomodation = $faker->company() . ' Hotel';
            $newPackage->flight = $faker->numberBetween(0, 1);
            $newPackage->price = $faker->numberBetween(300, 5000);
            $newPackage->save();
        }
    }
}
