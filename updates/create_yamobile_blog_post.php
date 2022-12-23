<?php namespace YaMobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileBlogPost extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->boolean('status');
            $table->text('title')->nullable();
            $table->string('description')->nullable();
            $table->string('slug');
            $table->text('image')->nullable();
            $table->text('content');
            $table->dateTime('datetime')->nullable();
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_post');
    }
}
