<?php namespace YaMobile\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \YaMobile\Blog\Components\Posts::class => 'Posts',
            \YaMobile\Blog\Components\Categories::class => 'Categories',
            \YaMobile\Blog\Components\Post::class => 'Post',
            \YaMobile\Blog\Components\Tags::class => 'Tags',
            \YaMobile\Blog\Components\Category::class => 'Category'
        ];
    }

    public function registerSettings()
    {
    }
}
