<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_prestation_title');
            $table->text('first_prestation_content');
            $table->string('first_prestation_image');
            $table->text('first_prestation_horaires');
            $table->string('second_prestation_title');
            $table->text('second_prestation_content');
            $table->string('second_prestation_image');
            $table->string('third_prestation_title');
            $table->text('third_prestation_content');
            $table->string('third_prestation_image');
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
        Schema::dropIfExists('prestations');
    }
}
