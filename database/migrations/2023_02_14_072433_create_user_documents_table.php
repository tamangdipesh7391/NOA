<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('front_size')->nullable();
            $table->string('back_size')->nullable();
            $table->string('image')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('qualification')->nullable();
            $table->date('year_of_graduation')->nullable();
            $table->string('university')->nullable();
            $table->date('date_of_registration')->default(\Illuminate\Support\Carbon::now());
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
        Schema::dropIfExists('user_documents');
    }
};
