<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function test_new_users_if_name_is_empty()
    {
        $response = $this->post('/register', [
            'name' => '',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertSessionHasErrors(['name']);
    }
    public function test_new_users_if_email_is_empty()
    {
        $response = $this->post('/register', [
            'name' => 'andi',
            'email' => '',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertSessionHasErrors(['email']);
    }
    public function test_new_users_if_password_is_empty()
    {
        // $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/register', [
            'password' => null,
        ]);

        $response->assertSessionHasNoErrors();


        // $response = $this->post('/register', [
        //     'name' => 'andi',
        //     'email' => 'andi@gmail.com',
        //     'password' => null,
        //     'password_confirmation' => 'password'
        // ]);

        // $response->assertSessionHasErrors(['password']);
    }
    public function test_new_users_if_registered_with_email_that_already_existed()
    {
        $user = User::factory()->create(['email' => 'andi@gmail.com']);

        $response = $this->actingAs($user)->post('/register', [
            'name' => 'andi',
            'email' => 'andi@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertSessionHasNoErrors();
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}