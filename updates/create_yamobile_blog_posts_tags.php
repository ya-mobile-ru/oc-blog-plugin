<?php namespace YaMobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileBlogPostsTags extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_posts_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['post_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_posts_tags');
    }
}
