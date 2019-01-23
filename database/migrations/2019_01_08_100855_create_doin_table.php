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
            $table->string('first_paragraph_title');
            $table->text('first_paragraph_content');
            $table->string('second_paragraph_title');
            $table->text('second_paragraph_content');
            $table->string('third_paragraph_title');
            $table->text('third_paragraph_content');
            $table->text('wellness');
            $table->string('image');
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
