<?php

use Illuminate\Database\Seeder;

use App\Models\Festival;

use Faker\Generator as Faker;

class FestivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 4; $i++) { 

            $festival = New Festival();
            $festival->genere = $faker->word();
            $festival->nome_gruppo = $faker->word();
            $festival->data = $faker->date();
            $festival->padiglione = $faker->randomDigit();
    
            $festival->save();
        }
    }
}
