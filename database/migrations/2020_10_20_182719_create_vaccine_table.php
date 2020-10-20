<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine', function (Blueprint $table) {
            $table->integer('vaccines_id');
            $table->integer('dog_id');
            $table->string('veterinary');
            $table->date('vaccination_date');
            $table->date('expiration');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine');
    }
}
