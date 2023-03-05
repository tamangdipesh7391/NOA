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
        Schema::create('travel_grant_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('travel_grant_id')->constrained('travel_grants')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('country_id')->constrained('countries')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('province_id')->constrained('provinces')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('district_id')->constrained('districts')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('municipality_id')->constrained('municipalities')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->string('name')->nullable();
            $table->string('email');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone')->nullable();
            $table->string('tole')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_grant_forms');
    }
};
