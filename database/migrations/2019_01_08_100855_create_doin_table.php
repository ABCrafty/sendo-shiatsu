<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first-paragraph-title');
            $table->text('first-paragraph-content');
            $table->string('second-paragraph-title');
            $table->text('second-paragraph-content');
            $table->string('third-paragraph-title');
            $table->text('third-paragraph-content');
            $table->string('wellness');
            $table->text('image');
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
        Schema::dropIfExists('doin');
    }
}
