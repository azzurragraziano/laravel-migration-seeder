<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $type_of_accomodation = [
            'Indipendent House',
            'Apartment',
            'Hotel',
            'Camping',
            'Boat'
        ];

        //creare un x numero di righe nella tabella travels
        for($i = 0; $i < 5; $i++) {
            // creare una nuova riga
            $new_travel = new Travel();
           
            // popolare la riga
            $new_house->city = $faker->city(); 
            $new_house->country = $faker->country();
            $new_house->address = $faker->streetAddress();
            $new_house->type_of_accomodation = $type_of_accomodation[rand(0,4)];
            $new_house->duration = tinyInteger('duration')->unsigned();
            $new_house->description = text('description')->nullable();
            $new_house->price = $faker->randomFloat(2, 100, 9999);
            $new_house->timestamps();
            
            // salvare la riga
            $new_house->save();
        }
    }
}
