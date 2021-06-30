<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testImageApi() {
        $response = $this->call('GET', '/api/images');

        $this->assertEquals(200, $response->getStatusCode());
    }
}
