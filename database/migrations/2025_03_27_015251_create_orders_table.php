<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to users table
            $table->decimal('total_price', 10, 2)->default(0);
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('pending');
            $table->string('payment_method')->nullable();
            $table->timestamps(); // Created_at & Updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('orders');
    }
};


