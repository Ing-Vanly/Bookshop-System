<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_payments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('order_id')->constrained('orders'); // Foreign key linking to orders table
            $table->enum('payment_method', ['credit_card', 'paypal', 'cash']); // Payment method enum
            $table->decimal('total_amount', 10, 2); // Total amount for the payment
            $table->timestamp('payment_date'); // Date and time of the payment
            $table->enum('status', ['completed', 'failed', 'pending']); // Payment status
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

