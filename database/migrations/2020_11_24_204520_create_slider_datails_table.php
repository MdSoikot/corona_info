<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderDatailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_datails', function (Blueprint $table) {
            $table->id();
            $table->string("slider_name",255)->nullable();
            $table->string("title",255)->nullable();
            $table->string("sub_title",255)->nullable();
            $table->string("slider_img",255)->nullable();
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
        Schema::dropIfExists('slider_datails');
    }
}
