<?php namespace YaMobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileBlogCategory extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_category');
    }
}
