<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Post as BlogPost;

class Post extends ComponentBase
{

    public $post;
    public $breadcrumbs;

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

    public function onRun()
    {

        $this->post = $this->loadPost();

        if(!$this->post || ($this->post->category['slug'] !== $this->property('blog_slug'))) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

        $this->breadcrumbs = $this->generateBreadcrumbs();
    }

    private function loadPost()
    {
        $slug = $this->property('slug');
        
        return BlogPost::where('slug', $slug)->first();
    }
}
