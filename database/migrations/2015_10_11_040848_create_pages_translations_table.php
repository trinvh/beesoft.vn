<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_translations', function(Blueprint $t) {
            $t->increments('id');

            $t->string('name')->default('');
            $t->longText('content');

            $t->string('locale')->index();
            $t->integer('page_id')->unsigned();
            $t->unique(['locale', 'page_id']);
            $t->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages_translations');
    }
}
