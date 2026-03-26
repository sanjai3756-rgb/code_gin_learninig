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
        Schema::create('order_id', function (Blueprint $table) {
            $table->id();
            $table->string('name');        // VARCHAR
            $table->text('description');   // TEXT
            $table->integer('age');        // INT
            $table->boolean('status');     // TRUE/FALSE
            $table->date('ajay  date');     // DATE
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_id');
    }
};
