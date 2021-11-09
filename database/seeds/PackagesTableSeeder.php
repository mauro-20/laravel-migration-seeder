<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newPackage = new Package();
        $newPackage->code = 'bkk-2021-43';
        $newPackage->destination = 'Bangkok';
        $newPackage->nights_number = 14;
        $newPackage->departure = '2021-02-12';
        $newPackage->accomodation = 'Siam Hotel';
        $newPackage->flight = 1;
        $newPackage->price = 1500;
        $newPackage->save();
    }
}
