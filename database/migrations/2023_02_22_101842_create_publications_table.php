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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->longText('title');
            $table->string('journal');
            $table->string('volume')->nullable();
            $table->date('publish_date');
            $table->string('authors');
            $table->string('file')->nullable();
            $table->string('doi');
            $table->tinyInteger('status')->default(1)->comment('1 => Active, 2 => Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
