<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('link');
            $table->integer('author')->unsigned();
            $table->foreign('author')->references('id')->on('users');
            $table->integer('type')->unsigned();
            $table->foreign('type')->references('id')->on('article_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['link', 'author', 'type']);
        });
    }
}
