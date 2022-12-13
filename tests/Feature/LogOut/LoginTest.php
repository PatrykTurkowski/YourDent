<?php

namespace Tests\Feature\LogOut;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Check if you can go to the login form
     *
     * @return void
     */
    public function testCheckIfYouCanGoToTheLoginForm()
    {
        // ob_start();
        ob_end_flush();
        // ob_get_clean();
        $response = $this->get('/login');
        $response->assertOk();
    }
    /**
     * Check if you can go to the login form
     *
     * @return void
     */
    public function testCheckIfYouCanGoToTheRegisterForm()
    {

        $response = $this->get('/register');
        $response->assertOk();
    }
}