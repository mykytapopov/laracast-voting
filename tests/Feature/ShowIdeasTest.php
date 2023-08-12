<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_show_on_main_page()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My first idea',
            'category_id' => 1,
            'description' => 'Description of my first idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My second idea',
            'category_id' => 2,
            'description' => 'Description of my second idea',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee([$ideaOne->title, $ideaTwo->title]);
        $response->assertSee([$ideaOne->description, $ideaTwo->description]);
    }

    /** @test */
//    public function singe_idea_shows_correctly_the_show_page()
//    {
//        $idea = Idea::factory()->create([
//            'title' => 'My first idea',
//            'description' => 'Description of my first idea',
//        ]);
//
//        $response = $this->get(route('idea.show', $idea));
//
//        $response->assertSuccessful();
//        $response->assertSee($idea->title);
//        $response->assertSee($idea->description);
//    }

    /** @test */
//    public function ideas_pagination_works()
//    {
//        Idea::factory(Idea::PER_PAGE + 1)->create();
//
//        $ideaOne = Idea::find(1);
//        $ideaOne->title = 'My First Idea';
//        $ideaOne->save();
//
//        $ideaEleven = Idea::find(11);
//        $ideaEleven->title = 'My Eleventh Idea';
//        $ideaEleven->save();
//
//        $response = $this->get(route('idea.index'));
//
//        $response->assertSee($ideaOne->title);
//        $response->assertSee($ideaOne->description);
//
//        $response->assertDontSee($ideaEleven->title);
//        $response->assertDontSee($ideaEleven->description);
//
//        $response = $this->get(route('idea.index', ['page' => 2]));
//
//        $response->assertDontSee($ideaOne->title);
//        $response->assertDontSee($ideaOne->description);
//
//        $response->assertSee($ideaEleven->title);
//        $response->assertSee($ideaEleven->description);
//    }

    /** @test */
//    public function same_idea_title_different_slugs()
//    {
//        $ideaOne = Idea::factory()->create([
//            'title' => 'My first idea',
//            'description' => 'Description of my first idea',
//        ]);
//
//        $ideaTwo = Idea::factory()->create([
//            'title' => 'My first idea',
//            'description' => 'Description of my second idea',
//        ]);
//
//        $response = $this->get(route('idea.show', $ideaOne));
//        $response->assertSuccessful();
//        $this->assertTrue(request()->path() === 'ideas/my-first-idea');
//        $pathOne = request()->path();
//
//        $response = $this->get(route('idea.show', $ideaTwo));
//        $response->assertSuccessful();
//        $this->assertTrue(request()->path() !== $pathOne);
//    }
}
