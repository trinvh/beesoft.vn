<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts_tags', function(Blueprint $t) {
            $t->integer('post_id')->unsigned();
            $t->integer('tag_id')->unsigned();
            $t->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $t->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_posts_tags');
    }
}
