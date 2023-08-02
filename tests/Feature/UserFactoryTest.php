<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserFactoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_factory_relationship_with_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();
        $user->posts()->save($post);
        $this->assertInstanceOf(User::class, $post->user);
    }
}