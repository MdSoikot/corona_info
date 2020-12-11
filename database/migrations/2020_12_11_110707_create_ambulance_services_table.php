<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulanceServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulance_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('district');
            $table->string('area');
            $table->string('driver_name');
            $table->string('driver_phone');
            $table->string('vehicle_number');
            $table->boolean('is_reserved')->default(1);
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
        Schema::dropIfExists('ambulance_services');
    }
}
