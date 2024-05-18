<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->text('address')->nullable();
            $table->string('position');
            $table->string('department');
            $table->decimal('salary', 10, 2);
            $table->date('hire_date');
            $table->date('birth_date');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('photo')->nullable();
            $table->enum('status', ['Active', 'On Leave', 'Terminated'])->default('Active');
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
        Schema::dropIfExists('staff');
    }
};