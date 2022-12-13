<?php

namespace Tests\Feature\Admin;

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
        $this->actingAs($this->admin());
        $response = $this->get('/login');
        $response->assertRedirect();
        $response->isRedirect(RouteServiceProvider::HOME);
    }
    /**
     * Check if you can go to the login form
     *
     * @return void
     */
    public function testCheckIfYouCanGoToTheRegisterForm()
    {
        $this->actingAs($this->admin());
        $response = $this->get('/register');
        $response->assertRedirect();
    }
}