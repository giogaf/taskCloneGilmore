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

	public function testTodolistRecordCount()
	{
	$listFactory = factory('taskapp\Tarea')->create();
	$lists = Tarea::all();
	$this->assertEquals($lists->count(), 11);
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
