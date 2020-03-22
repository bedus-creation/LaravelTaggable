<?php

namespace Aammui\LaravelTaggable\Tests;

use Illuminate\Database\Eloquent\Model;

use Aammui\LaravelTaggable\Tests\TestCase;
use Aammui\LaravelTaggable\Traits\HasCategory;
use Aammui\LaravelTaggable\Traits\HasTag;

class CategoryTagsTest extends TestCase
{
    /** @test */
    public function string_category_can_add_to_models()
    {
        $post = Post::create(['name' => 'Post Name']);
        $post->addCategory('Category');
        $this->assertEquals(1, $post->category->count());
    }

    /** @test */
    public function array_category_can_add_to_models()
    {
        $post = Post::create(['name' => 'Post Title']);
        $post->addCategory(['Category', 'Laravel']);
        $this->assertEquals(2, $post->category->count());
    }

    /** @test */
    public function string_tags_can_add_to_models()
    {
        $post = Post::create(['name' => 'Title']);
        $post->addTag('Tags');
        $this->assertEquals(1, $post->tag->count());
    }

    /** @test */
    public function array_tags_can_add_to_models()
    {
        $post = Post::create(['name' => 'name']);
        $post->addTag(['Tags', 'Laravel']);
        $this->assertEquals(2, $post->tag->count());
    }
}
class Post extends Model
{
    public $timestamps = false;
    protected $fillable = ["name"];
    use HasTag, HasCategory;
}
