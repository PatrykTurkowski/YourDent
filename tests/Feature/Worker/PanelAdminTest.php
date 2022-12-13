<?php

namespace Tests\Feature\Worker;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PanelAdminTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Check if you can enter to services
     *
     * @return void
     */
    public function testCheckIfYouCanEnterToServices()
    {
        $this->actingAs($this->worker());
        $response = $this->get('/services');
        $response->assertOk();
    }
    /**
     * Check if you can enter to panels
     *
     * @return void
     */
    public function testCheckIfYouCanEnterToPanels()
    {
        $this->actingAs($this->worker());
        $response = $this->get('/panels');
        $response->assertOk();
    }
    /**
     * Check if you can enter to terms
     *
     * @return void
     */
    public function testCheckIfYouCanEnterToTerms()
    {
        $this->actingAs($this->worker());
        $response = $this->get('/terms');
        $response->assertOk();
    }
    /**
     * Check if you can enter to categories
     *
     * @return void
     */
    public function testCheckIfYouCanEnterToCategories()
    {
        $this->actingAs($this->worker());
        $response = $this->get('/categories');
        $response->assertOk();
    }
    /**
     * Check if you can enter to doctors
     *
     * @return void
     */
    public function testCheckIfYouCanEnterToDoctors()
    {
        $this->actingAs($this->worker());
        $response = $this->get('/doctors');
        $response->assertOk();
    }
    /**
     * Check if you can enter to users
     *
     * @return void
     */
    public function testCheckIfYouCanEnterToUsers()
    {
        $this->actingAs($this->worker());
        $response = $this->get('/users');
        $response->assertOk();
    }
}