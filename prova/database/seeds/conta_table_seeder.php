<?php

use Illuminate\Database\Seeder;
use app\conta;

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
            \App\Article::create([
                'nome'=>$faker->firstNameMale,
                'cfp'=>$faker->word,
                'data'=>$faker->timestamp,
                'conta'=>$faker->randomDigit,
                'saldo'=>$faker->randomDigit,
            ]);
        }
    }
}
