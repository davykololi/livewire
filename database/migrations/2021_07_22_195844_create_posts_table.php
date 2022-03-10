<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->unique();
            $table->string('slug',200)->unique();
            $table->string('image')->nullable();
            $table->string('caption', 100);
            $table->longText('content',2000);
            $table->text('description',200);
            $table->text('keywords');
            $table->integer('total_views')->default(0);
            $table->dateTime('published_date')->index(); 
            $table->string('published_by')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('featured')->default(0);
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index()->default();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
