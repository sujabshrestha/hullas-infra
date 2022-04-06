<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->text('service');
            $table->string('passportnumber');
            $table->string('address');
            $table->string('nationality');
            $table->string('phoneNumber');
            $table->string('email');
            $table->longText('remarks');
            $table->string('file')->nullable();
            $table->boolean('receive_information')->default(0);
            $table->boolean('receive_newsletter')->default(0);
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
        Schema::dropIfExists('appointments');
    }
}
