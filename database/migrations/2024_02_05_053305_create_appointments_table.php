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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('slot_id')->nullable();
            $table->string('doctor_id')->nullable();
            $table->string('patient_id')->nullable();
            $table->string('package_id')->nullable();
            $table->string('trx_id')->nullable();
            $table->string('status')->default(0)->nullable();
            $table->string('payment_status')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
