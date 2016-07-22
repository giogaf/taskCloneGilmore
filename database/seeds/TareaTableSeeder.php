<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use taskapp\Tarea;
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
        foreach (range(1,10) as $index) {
        	Tarea::create([
        		'nombre' => $faker->sentence(2),
        		'descripcion' => $faker->sentence(10),
        		]);
        }
    }
}
