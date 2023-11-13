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
        Schema::create('doors', function (Blueprint $table) {
            $table->id();
            $table->double('MD_width')->nullable();
            $table->double('MD_height')->nullable();
            $table->double('MD_area')->nullable();
            $table->double('RD_width')->nullable();
            $table->double('RD_height')->nullable();
            $table->double('No_of_RD')->nullable();
            $table->double('RD_area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doors');
    }
};
