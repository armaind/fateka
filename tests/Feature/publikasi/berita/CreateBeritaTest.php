<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateBeritaTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_user_can_view_create_berita_form()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita');
        
        $response->assertStatus(200);
    }

    // test create berita if judul is not entered
    public function test_create_berita_if_judul_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/tambah-berita');
        
        $response = $this->post('/dashboard/berita/tambah-berita', [
            'judul' => null,
            'headline' => 'Baru',
            'kategori' => 'Buku',
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);
        
        $this->expectError();
        $response->assertSessionHasNoErrors(['judul']);
        $result = Berita::add("please fill out this field");
    }

    // test create berita if headline is not entered
    public function test_create_berita_if_headline_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/tambah-berita');
        
        $response = $this->post('/dashboard/berita/tambah-berita', [
            'judul' => 'Judul Buku Baru',
            'headline' => null,
            'kategori' => 'Buku',
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);
        $this->expectError();
        $response->assertSessionHasNoErrors(['headline']);
        $result = Berita::add("please fill out this field");
    }
    // test create berita if thumbline is not a valid value
    // public function test_create_berita_if_thumbnail_is_not_a_valid_value()
    // {

    // }

    // test create berita if content is not entered
    public function test_create_berita_if_kategori_is_not_entered()
    {
        $user = User::factory()->create();
    
        $response = $this->actingAs($user)
        ->withSession([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->get('/dashboard/berita/tambah-berita');
        
        $response = $this->post('/dashboard/berita/tambah-berita', [
            'judul' => 'Judul Buku Baru',
            'headline' => 'Baru',
            'kategori' => null,
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);
        $this->expectError();
        $response->assertSessionHasNoErrors(['kategori']);
        $result = Berita::add("please fill out this field");
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
        ->get('/dashboard/berita/tambah-berita');
        
        $response = $this->post('/dashboard/berita/tambah-berita', [
            'judul' => 'Judul Buku Baru',
            'headline' => 'Baru',
            'kategori' => 'Buku',
            'isi_berita' => null,
        ]);
        $this->expectError();
        $response->assertSessionHasNoErrors(['isi_berita']);
        $result = Berita::add("please fill out this field");
    }
    public function test_create_berita_with_valid_data()
    {
        // $this->withoutExceptionHandling();
        // $user = User::factory()->create();
    
        // $response = $this->actingAs($user)
        // ->get('/dashboard/berita/tambah-berita');

        $response = $this->get('/dashboard/berita/tambah-berita', [
            'judul' => 'Judul Buku Baru',
            'headline' => 'Baru',
            'kategori' => 'Buku',
            'isi_berita' => 'Lorem ipsum dolor sit amet.',
        ]);

        $response->assertValid();
        
    }
}
