<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Post as BlogPost;
use Yamobile\Blog\Models\Category;

class Post extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Пост блога',
            'description' => 'Показывает пост блога.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Параметр URL',
                'description' => 'Параметр URL, необходимый для выбора конкретной записи.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function post()
    {
        $slug = $this->property('slug');
        
        return BlogPost::where('slug', $slug)->first();
    }
}
