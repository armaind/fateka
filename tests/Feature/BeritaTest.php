<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Berita;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BeritaTest extends TestCase
{
    use RefreshDatabase; use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_berita_can_be_create()
    {
        // $this->withoutExceptionHandling();

        $berita = Berita::factory()->create();
        $this->json('INSERT', $berita->get());
        $this->assertModelExists($berita);
        $this->seed();

        // $this->assertDatabase('berita', [
        //     'id',
        //     'judul',
        //     'headline',
        //     'kategori',
        //     'thumbnail',
        //     'author',
        //     'isi_berita',
        //     'tanggal',
        //     'user_id',
        //     'created_at',
        //     'updated_at'
        //     => $berita->toArray()]);
        
    }

    public function test_a_berita_can_be_update()
    {
        $berita = Berita::factory()->create();
        $this->json('UPDATE', $berita->update());
        $this->assertDatabaseHas('berita', ['id' => $berita->id]);
    }
    
    public function test_a_berita_can_be_deleted()
    {   
        $berita = Berita::factory()->create();
        $this->json('DELETE', $berita->delete());
        $this->assertDatabaseMissing('berita', $berita->toArray());
    }
}
