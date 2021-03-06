<?php

use Illuminate\Database\Seeder;
use App\VacationPackage;

class VacationPackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            
            // nuova istanza
            $new_vacation_package = new VacationPackage();

            // popolamento dati fake

            $new_vacation_package->title = 'Fuga Romantica Costosa';
            $new_vacation_package->travel_agency = 'LaPalma Agenzia Viaggi';
            $new_vacation_package->travelers = rand(1,20);
            $new_vacation_package->location = 'New York';
            $new_vacation_package->transportation = 'Aereo';
            $new_vacation_package->property = 'Hotel';
            $new_vacation_package->departing = "2013/03/15";
            $new_vacation_package->days = rand(1,30);
            $new_vacation_package->details = 'Ottimo pacchetto per una fuga romantica nel weekend';
            $new_vacation_package->discount = 20.00;
            $new_vacation_package->price = 500.00;

            // salviamo l'istanza completa dei dati
            $new_vacation_package->save();

        }
    }
}
