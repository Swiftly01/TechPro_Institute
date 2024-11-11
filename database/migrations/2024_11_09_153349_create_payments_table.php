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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->decimal('amount', 10, 2)->nullable();
            $table->decimal('amount_due',10,2);
            $table->string('payment_reference')->nullable();
            $table->string('status')->nullable();
            $table->string('purpose')->nullable();
            $table->string('receipt_url');
            $table->integer('schedule_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
