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

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'status' => 'required',
        'slug' => 'required'
    ];
}
