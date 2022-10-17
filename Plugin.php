<?php namespace YaMobile\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \YaMobile\Blog\Components\Posts::class => 'Posts',
            \YaMobile\Blog\Components\Categories::class => 'Categories'
        ];
    }

    public function registerSettings()
    {
    }
}
