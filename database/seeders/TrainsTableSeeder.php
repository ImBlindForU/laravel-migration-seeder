<?php

namespace Database\Seeders;

use App\Models\trains;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 10; $i++){
            $newTrain = new trains();
            $newTrain->stazione_di_partenza = $faker->word(1);
            $newTrain->stazione_di_arrivo = $faker->word(1);
            $newTrain->orario_di_partenza = $faker->date('2022_12_d');
            $newTrain->orario_di_arrivo = $faker->date('2022_12_d');
            $newTrain->codice_treno = $faker->numberBetween(1, 9999);
            $newTrain->numero_di_carrozze = $faker->numberBetween(1, 50);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            dd($newTrain);
            // $newTrain->save();
        }
    }
}
