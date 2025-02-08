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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('thumbnail')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('seo_title', 120)->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->decimal('course_duration_1', 6, 2)->nullable();
            $table->string('course_duration_1_unit', 32)->nullable();
            $table->decimal('course_duration_2', 6, 2)->nullable();
            $table->string('course_duration_2_unit', 32)->nullable();
            $table->decimal('class_duration_1', 6, 2)->nullable();
            $table->string('class_duration_1_unit', 32)->nullable();
            $table->string('frequency_1', 32)->nullable();
            $table->decimal('class_duration_2', 6, 2)->nullable();
            $table->string('class_duration_2_unit', 32)->nullable();
            $table->string('frequency_2', 32)->nullable();
            $table->text('additional_info')->nullable();
            $table->text('eligibility')->nullable();
            $table->text('curriculum')->nullable();
            $table->text('exam_criteria')->nullable();
            $table->string('certification_authority')->nullable();
            $table->foreignId('course_category_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
