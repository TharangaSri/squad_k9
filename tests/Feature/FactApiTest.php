<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FactApiTest extends TestCase {

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFactApi() {
        $response = $this->call('GET', '/api/fact/1');

        $this->assertEquals(200, $response->getStatusCode());
    }

}
