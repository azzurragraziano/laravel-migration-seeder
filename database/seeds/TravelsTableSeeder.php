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
            $new_travel->city = $faker->city(); 
            $new_travel->country = $faker->country();
            $new_travel->address = $faker->streetAddress();
            $new_travel->type_of_accomodation = $type_of_accomodation[rand(0,4)];
            $new_travel->duration = $faker->randomDigit();
            $new_travel->description = $faker->sentence();
            $new_travel->price = $faker->randomFloat(1, 20, 30);
            // $new_travel->timestamps();
            
            // salvare la riga
            $new_travel->save();
        }
    }
}
