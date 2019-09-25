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
            $table->bigIncrements('id')->nullable();
            $table->string('Title_ar')->nullable();
            $table->string('Auther_ar')->nullable();
            $table->text('Body_ar')->nullable();
            $table->string('Title_en')->nullable();
            $table->string('Auther_en')->nullable();
            $table->text('Body_en')->nullable();
            $table->string('image')->nullable();
            $table->string('optradio');


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
