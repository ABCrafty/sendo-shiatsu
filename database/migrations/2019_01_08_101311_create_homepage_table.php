<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shiatsu-text');
            $table->string('shiatsu-image');
            $table->string('doin-text');
            $table->string('doin-image');
            $table->string('first-presta-title');
            $table->string('first-presta-content');
            $table->string('second-presta-title');
            $table->string('second-presta-content');
            $table->string('third-presta-title');
            $table->string('third-presta-content');
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
        Schema::dropIfExists('homepage');
    }
}
