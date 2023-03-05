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
        Schema::create('travel_grants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->nullable()
                ->constrained('menus');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->boolean('status')->default(0);
            $table->date('date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->longText('intro_text')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_grants');
    }
};
