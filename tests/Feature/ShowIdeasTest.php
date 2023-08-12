<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_show_on_main_page()
    {
        $ideaOne = Idea::find(1);
        $ideaTwo = Idea::find(2);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee([
            $ideaOne->title,
            $ideaOne->description,
            $ideaOne->category->name,
            $ideaOne->status->name,
            $ideaTwo->title,
            $ideaTwo->description,
            $ideaTwo->category->name,
            $ideaTwo->status->name,
        ]);
    }

    /** @test */
    public function singe_idea_shows_correctly_the_show_page()
    {
        $idea = Idea::find(1);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee([
            $idea->title,
            $idea->description,
            $idea->category->name,
            $idea->status->name,
        ]);
    }

    /** @test */
    public function ideas_pagination_works()
    {
        Idea::factory(Idea::PER_PAGE + 1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->save();

        $response = $this->get(route('idea.index'));

        $response->assertSee([
            $ideaOne->title,
            $ideaOne->description,
        ]);

        $response->assertDontSee([
            $ideaEleven->title,
            $ideaEleven->description,
        ]);

        $response = $this->get(route('idea.index', ['page' => 2]));

        $response->assertDontSee([
            $ideaOne->title,
            $ideaOne->description,
        ]);

        $response->assertSee([
            $ideaEleven->title,
            $ideaEleven->description,
        ]);
    }

    /** @test */
    public function same_idea_title_different_slugs()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My first idea',
            'category_id' => 1,
            'status_id' => 1,
            'description' => 'Description of my first idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My first idea',
            'category_id' => 2,
            'status_id' => 2,
            'description' => 'Description of my second idea',
        ]);

        $response = $this->get(route('idea.show', $ideaOne));
        $response->assertSuccessful();
        $this->assertTrue(request()->path() === 'ideas/my-first-idea');
        $pathOne = request()->path();

        $response = $this->get(route('idea.show', $ideaTwo));
        $response->assertSuccessful();
        $this->assertTrue(request()->path() !== $pathOne);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }
}
