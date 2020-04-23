### Introduction 
Category and Tags are often useful while working working with Laravel Model. This solution enable categories and tags for any Models in Laravel. Here step by step setup is given below.

### Step1: Installation
```php
composer require aammui/laravel-taggable
```

### Step2: Publish Migrations assets
```
php artisan vendor:publish --provider="Aammui\LaravelTaggable\LaravelTaggableServiceProvider"
php artisan migrate
```

### Step3: Use Traits
Add ```HasCatgory``` and ```HasTag``` Traits in your model.
```php
<?php 

namespace App;

use Aammui\LaravelTaggable\Traits\HasCategory;
use Aammui\LaravelTaggable\Traits\HasTag;

class Post extends Model {
    use HasCategory, HasTag;
}
```

### Step4: Call from anywhere.
```php
<?php
$post = Post::create(['name'=>'Post']);
$post->addTag('Tags');
$post->addTag(['Tags','Category']);
$post->addCategory('Category');
$post->addCategory(['Category', 'Laravel Category']);
```

### Step5: Display In Blade
```blade.php
<ul>
@foreach($posts->category as $item)
<li>{{$item->name}}</li>
@endforeach
</ul>
```