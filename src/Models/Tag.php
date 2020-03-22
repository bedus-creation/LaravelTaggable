<?php

namespace Aammui\LaravelTaggable\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Artefact\Models\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Artefact\Models\Movie[] $movies
 * @property-read int|null $movies_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domain\Artefact\Models\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domain\Artefact\Models\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domain\Artefact\Models\Tag query()
 * @mixin \Eloquent
 */
class Tag extends Model
{
    protected $fillable = ["name"];
}
