<?php

namespace Tests\Feature;

<<<<<<< HEAD
// use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     */
    public function test_the_application_returns_a_successful_response(): void
=======
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
