<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('weight');
            $table->string('breed');
            $table->enum('gender', ['male', 'female']); // Ensure it matches the form
            $table->date('dob');
            $table->string('color');
            $table->text('message')->nullable();
            $table->string('image')->nullable();
            $table->timestamps(); // Add timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}