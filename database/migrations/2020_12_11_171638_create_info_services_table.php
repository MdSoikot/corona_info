<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_services', function (Blueprint $table) {
            $table->id();
            $table->string("service_name",255)->nullable();
            $table->longText("slug")->nullable();
            $table->string("icon_image",255)->nullable();
            $table->string("short_desc",255)->nullable();
            $table->string("content")->nullable();

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
        Schema::dropIfExists('info_services');
    }
}
