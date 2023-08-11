<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_generate_gravetar_default_image()
    {
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'john.doe@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();


        $this->assertEquals(
            'https://www.gravatar.com/avatar/068f7096b3e5bd9cc869763bc12188dd?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-10.png',
            $gravatarUrl
        );
    }
}
