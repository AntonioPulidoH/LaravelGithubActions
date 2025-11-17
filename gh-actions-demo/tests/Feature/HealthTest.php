<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthTest extends TestCase
{
    public function health_endpoint_returns_ok()
    {
        $response = $this->get('/health');

        $response->assertStatus(200)
                 ->assertExactJson(['status' => 'ok']);
    }
}