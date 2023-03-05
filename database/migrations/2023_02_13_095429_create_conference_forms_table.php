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
        Schema::create('conference_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conference_id')->constrained('conferences')
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_forms');
    }
};
