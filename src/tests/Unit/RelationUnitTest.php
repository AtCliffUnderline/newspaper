<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RelationUnitTest extends TestCase
{
	use RefreshDatabase;

    /**
     * A basic test to check relations.
     *
     * @return void
     */
    public function testRelations()
    {
        $category = factory(Category::class)->create();
        $news = factory(News::class, 2)->create();
        $this->assertEquals($category, $news[0]->category);
        $this->assertEquals($category, $news[1]->category);
    }
}
