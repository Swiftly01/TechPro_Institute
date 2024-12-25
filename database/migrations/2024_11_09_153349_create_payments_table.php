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
           // $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
           $table->unsignedBigInteger('student_id')->nullable();
           $table->unsignedBigInteger('user_id')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->decimal('amount_due',10,2);
            $table->string('payment_reference')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('status')->nullable();
            $table->string('purpose')->nullable();
            $table->integer('number_of_people')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
