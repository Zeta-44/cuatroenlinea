<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SpinTest extends TestCase
{
    public function test_wheelspin(){
       
        $codigo = file_get_contents('/1');
        $this->assertTrue(substr_count($codigo, "hover:animate-spin")===7);
    }
}