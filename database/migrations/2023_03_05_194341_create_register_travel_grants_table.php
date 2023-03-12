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
        Schema::create('register_travel_grants', function (Blueprint $table) {
            $table->id();
            $table->string('reason')->nullable();
            $table->date('date')->default(now());
            $table->string('venue')->nullable();
            $table->string('expected_grant')->nullable();
            $table->integer('membership_number');
            $table->string('grant_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_travel_grants');
    }
};
