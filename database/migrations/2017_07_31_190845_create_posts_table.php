<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('slug', 200)->unique();
            $table->string('title')->nullable()->default(null);
            $table->longText('body')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('type', 50)->default('post');
            $table->string('seo')->default(json_encode(['title'=>'' ,'description'=>'']));
            $table->timestamp('published_at')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
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
