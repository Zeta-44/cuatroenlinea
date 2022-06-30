<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TableroTest extends TestCase
{
    protected $link = "http://cuatroenlinea.ddev.site/jugar/17";


    public function test_inicio()
    {
        $response = $this->get($this->link);

        $response->assertStatus(200);
    }

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
        $response->assertStatus(200);
    }
    /*
    no da error pero tampoco debería pasar que se puedan seguir 
    tirando fichas una vez esté lleno el tablero
    */

    public function test_fallo()
    {
        $response = $this->get('/jugar/18');

        $response->assertStatus(200);
    }

}