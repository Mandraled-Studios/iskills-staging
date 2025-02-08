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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('designation', 255);
            $table->string('department')->nullable();
            $table->text('description')->nullable();
            $table->text('thumbnail')->nullable();
            $table->integer('vacancies')->nullable();
            $table->string('salary')->nullable();
            $table->text('requirements')->nullable();
            $table->text('skillset')->nullable();
            $table->string('job_location', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
