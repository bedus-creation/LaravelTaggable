<?php

namespace Aammui\LaravelTaggable\Traits;

use Aammui\LaravelTaggable\Models\Category;
use Illuminate\Support\Str;

trait HasCategory
{
    /**
     * Add Categories to Resume or Jobs
     */
    public function addCategory($data = [])
    {
        $categories = collect($data)->map(function ($item) {
            return Category::firstOrCreate(['name' => $item], ['slug' => Str::slug($item)])->id;
        });

        $this->category()->sync($categories);
    }

    public function category()
    {
        return $this->morphToMany(Category::class, 'model', 'category_model', 'model_id', 'category_id');
    }
}
