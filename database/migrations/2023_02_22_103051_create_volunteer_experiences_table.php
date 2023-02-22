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
        Schema::create('volunteer_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('designation');
            $table->string('org_name');
            $table->string('start')->nullable();
            $table->string('end')->default('Present');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_experiences');
    }
};
