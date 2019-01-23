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
            $table->string('shiatsu_text');
            $table->string('shiatsu_image');
            $table->string('doin_text');
            $table->string('doin_image');
            $table->string('first_presta_title');
            $table->string('first_presta_content');
            $table->string('second_presta_title');
            $table->string('second_presta_content');
            $table->string('third_presta_title');
            $table->string('third_presta_content');
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
