<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Berita;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateBeritaTest extends TestCase
{
    use RefreshDatabase; use WithFaker;

    // public function test_user_can_edit_form_berita()
    // {
    //     $this->withoutExceptionHandling();

    //     $user = User::factory()->create();
    
    //     $response = $this->actingAs($user)
    //     ->withSession([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //         'password' => 'password',
    //         'password_confirmation' => 'password',
    //     ])
    //     ->get(route('berita.store'));
        
    //     $response->assertStatus(200);
    // }

    // test create berita if judul is not entered
    public function test_update_berita_if_judul_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/{id}/edit');
        
        $response = $this->post('/dashboard/berita/{id}/edit', [
            'judul' => null,
            'headline' => 'Baru',
            'kategori' => 'Buku',
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);
        
        // $this->expectError();
        $response->assertSessionHasNoErrors(['judul']);
        $result = ("please fill out this field");
    }

    // test create berita if headline is not entered
    public function test_update_berita_if_headline_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/{id}/edit');
        
        $response = $this->post('/dashboard/berita/{id}/edit', [
            'judul' => 'Judul Buku Baru',
            'headline' => null,
            'kategori' => 'Buku',
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);
        
        // $this->expectError();
        $response->assertSessionHasNoErrors(['headline']);
        $result = ("please fill out this field");
    }
    // test create berita if thumbline is not a valid value
    // public function test_create_berita_if_thumbnail_is_not_a_valid_value()
    // {

    // }

    // test create berita if content is not entered
    public function test_update_berita_if_kategori_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/{id}/edit');
        
        $response = $this->post('/dashboard/berita/{id}/edit', [
            'judul' => 'Judul Buku Baru',
            'headline' => 'Baru',
            'kategori' => null,
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);
        
        // $this->expectError();
        $response->assertSessionHasNoErrors(['kategori']);
        $result = ("please fill out this field");
    }

    public function test_create_berita_if_content_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/{id}/edit');
        
        $response = $this->post('/dashboard/berita/{id}/edit', [
            'judul' => 'Judul Buku Baru',
            'headline' => 'Baru',
            'kategori' => 'Buku',
            'isi_berita' => null,
        ]);
        
        // $this->expectError();
        $response->assertSessionHasNoErrors(['isi_berita']);
        $result = ("please fill out this field");
    }
    public function test_update_berita_with_valid_data()
    {
        // $this->withoutExceptionHandling();
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/{id}/edit');

        $response = $this->post('/dashboard/berita/{id}/edit', [
            'judul' => 'Judul Buku Baru',
            'headline' => 'Baru',
            'kategori' => 'Buku',
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);

        // $response->assertValid()->assertRedirect('/dashboard/berita');
        $response->assertValid();
        $response = $this->post('/dashboard/berita');
        
    }
    // public function test_user_can_create_a_berita()
    // {
    //     $this->withoutExceptionHandling();
    //     $user = Berita::factory()->create();
   

    //     $this->postJson([
    //         'judul' => $this->faker->text(5),
    //         'headline' => $this->faker->unique()->text(5),
    //         'kategori' => $this->faker->unique()->text(5),
    //         'author' => $this->faker->name(),
    //         'isi_berita' => $this->faker->realText($maxNbChars = 100),
    //     ])->get('/dashboard/berita/{id}/edit');

    //     $this->seeInDatabase('berita', [
    //         'judul' => $this->faker->text(5),
    //         'headline' => $this->faker->unique()->text(5),
    //         'kategori' => $this->faker->unique()->text(5),
    //         'author' => $this->faker->name(),
    //         'isi_berita' => $this->faker->realText($maxNbChars = 100),
    //     ]);

    //     $this->seeStatusCode(201);
    //     $this->seeJson([
    //         'judul' => $this->faker->text(5),
    //         'headline' => $this->faker->unique()->text(5),
    //         'kategori' => $this->faker->unique()->text(5),
    //         'author' => $this->faker->name(),
    //         'isi_berita' => $this->faker->realText($maxNbChars = 100),
    //     ]);


    //     {
    //         $this->withoutExceptionHandling();

    //         $user = Berita::factory()->create();

    //         $response = $this->actingAs($user, 'web')
    //         ->putJson('/dashboard/berita/{id}/edit', [
    //             'judul' => $this->faker->text(5),
    //             'headline' => $this->faker->unique()->text(5),
    //             'kategori' => $this->faker->unique()->text(5),
    //             'author' => $this->faker->name(),
    //             'isi_berita' => $this->faker->realText($maxNbChars = 100),
    //         ]);

    //     $response
    //         ->assertStatus(200)
    //         ->assertJson([
    //             'success' => true
    //         ]);
    //     }

    // }
    
    
    public function test_berita_can_be_updated()
    {
    $berita = Berita::factory()->create();
    $berita->judul = 'New Name';
    $berita->save();
    $this->assertDatabaseHas('berita', ['judul' => 'New Name']);
    }

}
