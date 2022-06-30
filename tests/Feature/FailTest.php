<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FailTest extends TestCase
{
    public function test_fallo()
    {
        $response = $this->get('/jugar/18');
        $response->assertStatus(500);
    }
}