<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');  // Password field after email
            $table->string('phone_number')->nullable();
            $table->string('profile_image')->nullable();
            $table->timestamps();  // Automatically adds created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }


};
