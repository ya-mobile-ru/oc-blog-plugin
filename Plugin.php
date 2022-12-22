<?php namespace Yamobile\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Yamobile\Blog\Components\Posts::class => 'Posts',
            \Yamobile\Blog\Components\Categories::class => 'Categories',
            \Yamobile\Blog\Components\Post::class => 'Post',
            \Yamobile\Blog\Components\Tags::class => 'Tags',
            \Yamobile\Blog\Components\Category::class => 'Category'
        ];
    }

    public function registerSettings()
    {
    }
}
