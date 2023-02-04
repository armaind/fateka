<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Artikel;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtikelTest extends TestCase
{
    use RefreshDatabase; use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_artikel_can_be_create()
    {
        // $this->withoutExceptionHandling();

        $artikel = Artikel::factory()->create();
        $this->json('INSERT', $artikel->get());
        $this->assertModelExists($artikel);
        $this->seed();
        
    }

    public function test_a_artikel_can_be_update()
    {
        $artikel = Artikel::factory()->create();
        $this->json('UPDATE', $artikel->update());
        $this->assertDatabaseHas('artikel', ['id' => $artikel->id]);
    }
    
    public function test_a_artikel_can_be_deleted()
    {   
        $artikel = Artikel::factory()->create();
        $this->json('DELETE', $artikel->delete());
        $this->assertDatabaseMissing('artikel', $artikel->toArray());
    }
}
