<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoleAdminTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Can_Show_Role_Admin_Page()
    {
        $user = User::role('dosen')->get()->random();
        // $this->actingAS($user);
        // $this->get('/dashboard')
        // ->assertOk();
        dd($user);
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
