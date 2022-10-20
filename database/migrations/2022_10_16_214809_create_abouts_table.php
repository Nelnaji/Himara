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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title');
            $table->text('body');
            $table->string('recommended_1');
            $table->string('recommended_2');
            $table->string('recommended_3');
            $table->string('recommended_4');
            $table->string('card_bg_img');
            $table->string('card_title');
            $table->string('card_body');
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
        Schema::dropIfExists('abouts');
    }
};
