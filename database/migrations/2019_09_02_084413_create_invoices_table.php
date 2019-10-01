<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('driver_name');
            $table->date('date');
            $table->string('starting_place');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('end_place');
            $table->string('vehicle_name');
            $table->string('vehicle_time');
            $table->string('handed_over');
            $table->string('petrol');
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
        Schema::dropIfExists('invoices');
    }
}
