<?php

namespace Aammui\LaravelTaggable\Traits;

use Aammui\LaravelTaggable\Models\Tag;

trait HasTag
{
    /**
     * Add tags to Resume or Jobs
     */
    public function addTag($data = [])
    {
        $tags = collect($data)->map(function ($item) {
            return Tag::firstOrCreate(['name' => $item])->id;
        });

        $this->tag()->sync($tags);
    }

    public function tag()
    {
        return $this->morphToMany(Tag::class, 'model', 'model_tag', 'model_id', 'tag_id');
    }
}
