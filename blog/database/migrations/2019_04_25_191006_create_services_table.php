<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types');
            $table->string('preintervention_state', 70);
            $table->string('applied_procedure', 70);
            $table->string('type_pet');
            $table->string('age_pet', 2);
            $table->string('weight_pet', 2);
            $table->string('cost', 2);
            $table->string('recipe', 100);
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
        Schema::dropIfExists('services');
    }
}
