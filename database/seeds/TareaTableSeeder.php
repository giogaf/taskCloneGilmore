<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use taskapp\Tarea;
use taskapp\Lista;
use Illuminate\Support\Str;
class TareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = \Faker\Factory::create();

        foreach (range(1,5) as $index) {
            Lista::create([
                'name' => $faker->sentence(2),
                'description' => $faker->sentence(10),                
                ]);
        }  

        foreach (range(1,20) as $index) {
            $n = $faker->sentence(2);
        	Tarea::create([
        		'name' => $n,
        		'description' => $faker->sentence(10),
                'lista_id' => $faker->numberBetween(1,5),
                'slug' => Str::slug($n),
        		]);
        }      
    }
}
