<?php namespace YaMobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYamobileBlogPostCategory extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_post_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('category_id');
            $table->primary(['post_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_post_category');
    }
}
