<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            // Main view
            $table->string('main_title');
            $table->string('star_title');
            $table->string('main_subtitle');
            $table->string('button1');
            $table->string('button2');
            // slider 1
            $table->string('slider1_title');
            $table->string('slider1_img');
            $table->string('slider1_subtitle');
            // slider 2
            $table->string('slider2_title');
            $table->string('slider2_img');
            $table->string('slider2_subtitle');
            // slider 3
            $table->string('slider3_title');
            $table->string('slider3_img');
            $table->string('slider3_subtitle');

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
};
