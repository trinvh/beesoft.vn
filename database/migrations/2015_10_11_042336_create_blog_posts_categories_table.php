<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts_categories', function(Blueprint $t) {
            $t->integer('post_id')->unsigned();
            $t->integer('blog_category_id')->unsigned();
            $t->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $t->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_posts_categories');
    }
}
