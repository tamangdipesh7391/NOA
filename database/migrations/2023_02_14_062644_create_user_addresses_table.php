<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('permanent_country')
                ->constrained('countries')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('permanent_province')->constrained('provinces')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('permanent_district')->constrained('districts')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('permanent_municipality')->constrained('municipalities')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->string('permanent_tole')->nullable();
            $table->foreignId('temporary_country')
                ->nullable()
                ->constrained('countries')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('temporary_province')
                ->nullable()
                ->constrained('provinces')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('temporary_district')
                ->nullable()
                ->constrained('districts')->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreignId('temporary_municipality')
                ->nullable()
                ->constrained('municipalities')->onDelete('restrict')
                ->onUpdate('cascade');
            $table->string('temporary_tole')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
};
