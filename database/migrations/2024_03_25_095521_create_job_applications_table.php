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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 160);
            $table->string('email', 255);
            $table->string('phone', 15);
            $table->string('alternate_phone', 15)->nullable();
            $table->integer('pincode');
            $table->string('state', 64);
            $table->string('city', 64);
            $table->string('region', 64);
            $table->string('house_no', 64);
            $table->string('qualification', 255);
            $table->string('certifications', 255)->nullable();
            $table->string('desired_position', 255);
            $table->string('experience_in_years', 64);
            $table->string('resume')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
