<?php namespace Yamobile\Blog\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Blog\Models\Category;

class Categories extends ComponentBase
{

    public $categories;

    public function componentDetails()
    {
        return [
            'name' => 'Категории блога',
            'description' => 'Показывает список категорий блога.'
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'Параметр пагинации',
                'description' => 'Параметр отвечающий за количество выводимых категорий',
                'default'     => '6',
            ],
        ];
    }

    public function onRun()
    {
        $this->categories = $this->loadCategories();
    }

    private function loadCategories()
    {

        $items = $this->property('items');

        if($items){
            return Category::paginate($items);
        }

        return Category::all();
    }
}
