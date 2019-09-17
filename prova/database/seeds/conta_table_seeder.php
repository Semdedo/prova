<?php

use Illuminate\Database\Seeder;
use \app\conta;

class conta_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i <50; $i++){
            \App\conta::create([
                'nome'=>$faker->firstNwordameMale,
                'cpf'=>$faker->word,
                'data'=>$faker->timestamp,
                'conta'=>$faker->randomDigit,
                'saldo'=>$faker->randomDigit,
            ]);
        }
    }
}
