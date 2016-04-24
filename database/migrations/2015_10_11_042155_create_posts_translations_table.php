<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_translations', function(Blueprint $t) {
            $t->increments('id');

            $t->string('name')->default('');
            $t->text('decription');
            $t->longText('content');

            $t->string('locale')->index();
            $t->integer('post_id')->unsigned();
            $t->unique(['locale', 'post_id']);
            $t->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts_translations');
    }
}
