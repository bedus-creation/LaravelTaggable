<?php

namespace Aammui\LaravelTaggable\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Artefact\Models\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Artefact\Models\Movie[] $movies
 * @property-read int|null $movies_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domain\Artefact\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domain\Artefact\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domain\Artefact\Models\Category query()
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ["name", "slug"];
}
