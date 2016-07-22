<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use taskapp\Tarea;

class TareaTest extends TestCase
{
	use DatabaseTransactions;
	public function testInstanciaTarea()
	{
		$tarea = new Tarea;
		$this->assertEquals(get_class($tarea),'taskapp\Tarea');
	}
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
