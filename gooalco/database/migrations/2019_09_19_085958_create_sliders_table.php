<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_ar')->nullable();
            $table->string('title2_ar')->nullable();
            $table->string('text_blue_ar')->nullable();
            $table->text('description_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title2_en')->nullable();
            $table->string('text_blue_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('image')->default('default.jpg')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
