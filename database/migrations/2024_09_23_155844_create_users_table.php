<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // Change 'name' to 'first_name'
            $table->string('last_name');  // Add 'last_name'
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps(); // Creates created_at and updated_at columns

            // If you are using email verification, you might want to add:
            $table->timestamp('email_verified_at')->nullable(); // For email verification
            $table->string('remember_token')->nullable(); // For "remember me" functionality
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
