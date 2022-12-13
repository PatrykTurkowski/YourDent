<?php

namespace Tests\Feature\LogOut;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test home page is working correctly
     *
     * @return void
     */
    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
     * Test if you can see the sign in button
     *
     * @return void
     */
    public function testIfYouCanSeeTheSignInButton()
    {
        $response = $this->get('/');
        $response->assertSeeText('Login');
        $response->assertDontSeeText('dashboard');
        $response->assertDontSeeText('Admin Panel');
        $response->assertStatus(200);
    }
}