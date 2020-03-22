### Introduction 
Category and Tags are often useful while working working with Laravel Resources.

### Sync Category and Tags to Models.
Add Tags and Category.
```php
<?php 

namespace App;

use Aammui\LaravelTaggable\Traits\HasCategory;
use Aammui\LaravelTaggable\Traits\HasTag;

class Post extends Model {
    use HasCategory, HasTag;
}
```
Call from anywhere.
```php
<?php
$post = Post::create(['name'=>'Post']);
$post->addTag('Tags');
$post->addTag(['Tags','Category']);
$post->addCategory('Category');
$post->addCategory(['Category', 'Laravel Category']);
```