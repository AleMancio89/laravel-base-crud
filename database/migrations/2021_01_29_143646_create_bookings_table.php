<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* ( `id` INT NOT NULL AUTO_INCREMENT , `guest_full_name` VARCHAR(256) NOT NULL , `guest_credit_card` VARCHAR(256) NOT NULL , `room` VARCHAR(50) NOT NULL , `from_date` VARCHAR(50) NOT NULL , `to_date` VARCHAR(50) NOT NULL , `more_details` TEXT NOT NULL , PRIMARY KEY (`id`)) */
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest_full_name', 256);
            $table->string('guest_credit_card', 256);
            $table->string('room', 50);
            $table->string('from_date', 50);
            $table->string('to_date', 50);
            $table->text('more_details');
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
        Schema::dropIfExists('bookings');
    }
}
