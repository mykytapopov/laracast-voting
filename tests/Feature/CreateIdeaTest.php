<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire;
use Tests\TestCase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function create_idea_form_does_not_show_when_logged_out()
    {
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('Please login to create an idea.');
        $response->assertDontSee('Let us know what would you like, and we\'ll take a look over!', false);
    }

    /** @test */
    public function create_idea_form_does_show_when_logged_in()
    {
        $response = $this->actingAs(User::factory()->create())->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertDontSee('Please login to create an idea.');
        $response->assertSee('Let us know what would you like, and we\'ll take a look over!', false);
    }

    /** @test */
    public function main_page_contains_idea_livewire_component()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('idea.index'))
            ->assertSeeLivewire('create-idea');
    }

    /** @test */
    public function create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('description', '')
            ->set('category', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'description', 'category']);
    }

    /** @test */
    public function create_idea_works()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create(['name' => 'Category One']);
        $status = Status::factory()->create(['name' => 'Open']);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'test idea')
            ->set('description', 'test idea description')
            ->set('category', $category->id)
            ->call('createIdea')
            ->assertRedirect('/');

        $response = $this->actingAs($user)->get(route('idea.index'));
        $response->assertSuccessful();
        $response->assertSee('test idea');
        $response->assertSee('test idea description');
        $response->assertSee('Idea was added successfully');
        $response->assertSee($status->name);
        $this->assertDatabaseHas('idea', ['title' => 'test idea']);
    }
}
