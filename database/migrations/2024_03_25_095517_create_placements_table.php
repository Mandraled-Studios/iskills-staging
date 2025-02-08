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
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->date('placement_date')->nullable();
            $table->string('date_format', 32)->default('Month YYYY');
            $table->string('company_name', 255)->nullable();
            $table->string('company_logo_image', 255)->nullable();
            $table->string('students_image')->nullable();
            $table->boolean('publish_status')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
