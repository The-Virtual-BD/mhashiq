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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('photo')->nullable();
            $table->string('orcid_id')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('bio_mini')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->longText('address')->nullable();
            $table->longText('facebook')->nullable();
            $table->longText('instagram')->nullable();
            $table->longText('linkedin')->nullable();
            $table->longText('research_gate')->nullable();
            $table->longText('google_scolar')->nullable();
            $table->string('cv')->nullable();
            $table->longText('aca_position')->nullable();
            $table->longText('job_position')->nullable();
            $table->longText('degrees')->nullable();
            $table->longText('extra_one')->nullable();
            $table->longText('extra_two')->nullable();
            $table->longText('extra_three')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
