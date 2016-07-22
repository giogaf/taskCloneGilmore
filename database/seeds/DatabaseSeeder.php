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
    	$this->call(TareaTableSeeder::class);
    }
}
