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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->text('designation')->nullable();
            $table->text('education')->nullable();
            $table->text('background')->nullable();
            $table->string('photo')->nullable();
            $table->text('experience')->nullable();
            $table->string('age')->nullable();
            $table->string('type')->nullable()->comment('psychiatrist, counsellor');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
           
            $table->string('gender')->nullable();
            $table->string('logo')->nullable();
            $table->string('role')->nullable()->comment('1 admin, 2 doctor, 3 patient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
