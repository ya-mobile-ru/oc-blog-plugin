<?php namespace YaMobile\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileBlogTags extends Migration
{
    public function up()
    {
        Schema::create('yamobile_blog_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_blog_tags');
    }
}
