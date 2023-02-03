<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Berita;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteBeritaTest extends TestCase
{
    use RefreshDatabase; use WithFaker;

    // public function test_delete_berita()
    // {
    //     // $this->withoutExceptionHandling();

    //     $berita = Berita::factory()->create();

    //     // $task = $this->createTask();

    //     $this->deleteJson(route('berita.destroy', $berita->id))->assertNoContent();

    //     $this->assertDatabaseMissing('berita', ['title' => $task->judul]);
    // }

    // public function test_delete() 
    // {
    //     $this->withoutMiddleware();
        
    //     $response = $this->call('DELETE', '/dashboard/berita');
    //     $this->assertEquals(405, $response->getStatusCode());
    //     $this->notSeeInDatabase('berita', ['deleted_at' => null, 'id' => 1]);
    // }


    // public function testDeleteUserForNonAdminUser()
    // {
    //     $user = User::factory()->create([
    //         'name' => 'user',
    //     ]);

    //     $response = $this->actingAs($user, 'berita')
    //         ->deleteJson('/dashboard/berita' . $user->id);

    //     $response->assertStatus(403);
    // }

    public function test_a_berita_can_be_deleted()
    {
        // $this->withoutExceptionHandling()->signIn();
        
        $berita = Berita::factory()->create();
        $this->json('DELETE', $berita->delete());
        $this->assertDatabaseMissing('berita', $berita->toArray());
    }

    public function test_a_berita_can_be_update()
    {
        $berita = Berita::factory()->create();
        $this->json('UPDATE', $berita->update());
        $this->assertDatabaseHas('berita', ['id' => $berita->id]);
    }

    public function test_a_berita_can_be_create()
    {
        $this->withoutExceptionHandling();

        $berita = Berita::factory()->create();
        $this->json('INSERT', $berita->insert(
            'judul',
            'headline',
            'thumbnail',
            'kategori',
            'author',
            'isi_berita',
            'tanggal',
            'user_id',
            'update_at',
            'created_at',
            'id'
        ->$berita));
        $this->assertDatabaseHas('berita', $berita->toArray());
        $this->assertCreated();
    }
    public function test_insert_unique_data()
    {
    $response = Berita::create([
    ]);

    $response->assertCreated();
    }
}
