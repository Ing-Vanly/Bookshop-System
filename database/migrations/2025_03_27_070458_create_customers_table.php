<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incremented)
            $table->string('name'); // Customer's name
            $table->string('email')->unique(); // Customer's email (unique)
            $table->string('password'); // Hashed password
            $table->text('address'); // Shipping address
            $table->string('phone'); // Customer's contact number
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

