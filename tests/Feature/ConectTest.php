<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConectTest extends TestCase
{
    public function test_inicio()
    {
        $response = $this->get($this->link);
        $response->assertStatus(200);
    }
}