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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('type');
            $table->decimal('price', 8, 2);
            $table->string('status');
            $table->text('description')->nullable();
            $table->integer('size')->nullable();
            $table->string('bed_type');
            $table->integer('capacity');
            $table->string('view')->nullable();
            $table->integer('floor')->nullable();
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
        Schema::dropIfExists('rooms');
    }
};