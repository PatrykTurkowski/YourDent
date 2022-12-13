<?php

namespace Tests\Feature\User;

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
        $this->actingAs($this->user());
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
        $this->actingAs($this->user());
        $response = $this->get('/');
        $response->assertDontSeeText('Login');
        $response->assertDontSeeText('Admin Panel');
        $response->assertSeeText('dashboard');
        $response->assertStatus(200);
    }
}