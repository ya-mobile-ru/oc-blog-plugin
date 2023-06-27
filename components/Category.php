<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Category as BlogCategory;

class Category extends ComponentBase
{

    public $category;
    public $breadcrumbs;


    public function componentDetails()
    {
        return [
            'name' => 'Категория блога',
            'description' => 'Показывает категорию блога.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Параметр URL',
                'description' => 'Параметр URL, необходимый для выбора конкретной категории.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $this->category = $this->loadCategory();

        if(!$this->category){
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }
        $this->breadcrumbs = $this->generateBreadcrumbs();
    }

    private function loadCategory()
    {
        $slug = $this->property('slug');
        
        return BlogCategory::where('slug', $slug)->first();
    }

    private function generateBreadcrumbs()
    {

        $arBreadcrumbs = array();

        $category = $this->loadCategory();

        $arBreadcrumbs[] = [
            'name' => $category->name,
            'link' => false
        ];

        return $arBreadcrumbs;

    }
}
