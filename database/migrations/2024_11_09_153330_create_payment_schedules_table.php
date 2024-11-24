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
        Schema::create('payment_schedules', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');
           $table->unsignedBigInteger('course_id');
            $table->decimal('amount', 10, 2);
            $table->string('purpose');
            $table->string('type');
            $table->string('desc');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_schedules');
    }
};
