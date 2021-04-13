<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProfileTest extends TestCase
{
    public function test_upload()
    {
        Storage::fake('local');

        $response = $this->post('profile', [
            'photo' => UploadedFile::fake()->image('foto.png')
        ]);

        $response->assertRedirect('profile');
    }

    public function test_photo_required()
    {
        $response = $this->post('profile', [
            'photo' => ''
        ]);

        $response->assertSessionHasErrors('photo');
    }
}
