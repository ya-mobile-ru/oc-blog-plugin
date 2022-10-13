<?php namespace YaMobile\Blog\Components;

use Cms\Classes\ComponentBase;
use YaMobile\Blog\Models\Post;
use YaMobile\Blog\Models\Category;

class Posts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Посты блога',
            'description' => 'Показывает список постов блога.'
        ];
    }

    public function posts()
    {
        return Post::get();
    }
}
