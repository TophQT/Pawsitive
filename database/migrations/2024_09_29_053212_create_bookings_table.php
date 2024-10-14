<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('address');
            $table->string('pet_name');
            $table->string('pet_type');
            $table->string('pet_breed');
            $table->integer('pet_age');
            $table->string('problem');
            $table->string('illness_period');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('clinic');
            $table->string('consultation');
            $table->string('payment_method');
            $table->string('card_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('exp_card')->nullable();
            $table->string('cvv')->nullable();
            $table->string('status')->default('Pending'); // New status column with default value 'Pending'
            $table->string('service_type'); // Add the new service_type column
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
