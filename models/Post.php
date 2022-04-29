<?php namespace YaMobile\Blog\Models;

use Model;

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
    
    public $belongsToMany = [
        'categories' => [
            'YaMobile\Blog\Models\Category',
            'table' => 'yamobile_blog_post_category',
            'order' => 'name'
        ]
    ];

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
}
