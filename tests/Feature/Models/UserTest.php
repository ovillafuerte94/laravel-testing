<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user()
    {
        User::factory()->create([
            'email' => 'ovillafuerte.94@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'ovillafuerte.94@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'no@existe.com'
        ]);
    }
}
