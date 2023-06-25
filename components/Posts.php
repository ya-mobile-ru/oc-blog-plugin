<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Post;
use Yamobile\Blog\Models\Category;

class Posts extends ComponentBase
{

    public $posts;

    public function componentDetails()
    {
        return [
            'name' => 'Посты блога',
            'description' => 'Показывает список постов блога.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Параметр URL категории',
                'description' => 'Параметр URL категории, необходимый для выбора записей.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
            'items' => [
                'title'       => 'yamobile.services::lang.components.categories.properties.items.title',
                'description' => 'yamobile.services::lang.components.categories.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    public function onRun()
    {

        $this->posts = $this->loadPosts();

    }

    public function loadPosts()
    {
        $slug = $this->property('slug');
        $items = $this->property('items');

        if($items){
            
        if ($slug) {
            return Category::get()
                    ->firstWhere('slug', $slug)
                    ->posts()
                    ->get()
                    ->paginate($items);
        }

        return Post::paginate($items);
        }
        return Post::all();
    }
}
