<?php namespace YaMobile\Blog\Components;

use Cms\Classes\ComponentBase;
use YaMobile\Blog\Models\Post;
use YaMobile\Blog\Models\Category;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Категории блога',
            'description' => 'Показывает список категорий блога.'
        ];
    }

    public function categories()
    {
        return Category::get();
    }
}
