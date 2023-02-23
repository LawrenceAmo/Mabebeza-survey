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
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements("id")->unique();
            $table->string('parent_name');
            $table->string('parent_surname');
            $table->string('child_name');
            $table->string('child_surname');
            $table->string('reciept');
            $table->string('email')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('store');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
