<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_service', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('header_id')->nullable();
            $table->foreign('header_id')->references('id')->on('headers');
            $table->unsignedInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('header_service');
    }
}
