<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('header_id')->nullable();
            $table->foreign('header_id')->references('id')->on('headers');
            $table->unsignedInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('name');
            $table->string('type_pet');
            $table->string('preintervention_state', 100);
            $table->string('applied_procedure', 70);
            $table->string('size', 20);
            $table->string('age_pet', 2);
            $table->string('weight_pet', 2);
            $table->double('cost', 4, 2);
            $table->string('recipe', 100)->nullable();
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
        Schema::dropIfExists('header_services');
    }
}
