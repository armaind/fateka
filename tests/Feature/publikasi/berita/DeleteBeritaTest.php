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

    public function test_delete_berita()
    {
        // $this->withoutExceptionHandling();

        $berita = Berita::factory()->create();

        // $task = $this->createTask();

        $this->deleteJson(route('berita.destroy', $berita->id))->assertNoContent();

        $this->assertDatabaseMissing('berita', ['title' => $task->judul]);
    }

    public function test_delete() 
    {
        $this->withoutMiddleware();
        
        $response = $this->call('DELETE', '/dashboard/berita');
        $this->assertEquals(302, $response->getStatusCode());
        $this->notSeeInDatabase('berita', ['deleted_at' => null, 'id' => 1]);
    }


    public function testDeleteUserForNonAdminUser()
    {
        $user = User::factory()->create([
            'type' => 'user',
        ]);

        $response = $this->actingAs($user, 'api')
            ->deleteJson('/api/user/' . $user->id);

        $response->assertStatus(403);
    }
}
