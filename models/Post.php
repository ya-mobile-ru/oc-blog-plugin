<?php namespace YaMobile\Blog\Models;

use Model;
use YaMobile\Blog\Models\Category;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_blog_post';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'status' => 'required',
        'description' => 'required',
        'content' => 'required',
        'slug' => 'required'
    ];

    /*
     * Relations
     */
    public $belongsToMany = [
        'categories' => [
            Category::class,
            'table' => 'yamobile_blog_posts_categories',
            'order' => 'name'
        ]
    ];
}
