<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_type_id')
                ->constrained('membership_types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('gender',['male','female']);
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('date_of_birth');
            $table->enum('account_status', [
                'pending', 'active', 'suspended', 'deleted'])
                ->default('pending');

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
        Schema::dropIfExists('users');
    }
};
