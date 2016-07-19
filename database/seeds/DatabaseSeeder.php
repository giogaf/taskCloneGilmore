<?php

use Illuminate\Database\Seeder;
use taskapp\Tarea;
class DatabaseSeeder extends Seeder
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
        		'descripcion' => $faker->sentence(4),
        		]);
        }
    }
}
