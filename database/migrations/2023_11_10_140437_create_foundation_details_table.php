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
        Schema::create('foundation_details', function (Blueprint $table) {
            $table->id();
            $table->double('C_line_length')->nullable();
            $table->double('F_width')->nullable();
            $table->double('F_height')->nullable();
            $table->double('F_volume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundation_details');
    }
};
