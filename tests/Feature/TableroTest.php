<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TableroTest extends TestCase
{
    

    public function test_tablero()
    {
        $codigo = file_get_contents($this->link);
        $this->assertTrue(substr_count($codigo, "bg-red-500")===8);
        $this->assertTrue(substr_count($codigo, "bg-gray-200")===40);
        $this->assertTrue(substr_count($codigo, "bg-sky-500")===1);
    }

    public function test_vertical()
    {
        $response = $this->get('/jugar/1111112222221212');
        $response->assertStatus(500);
    }

    public function test_wheelspin(){
       
        $code = file_get_contents($this->link);
        $this->assertTrue(substr_count($code, "hover:animate-spin")===7);
    }
}