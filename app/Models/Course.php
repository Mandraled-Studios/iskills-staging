<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'thumbnail',
        'hero_image',
        'description',
        'seo_title',
        'slug',
        'meta_description',
        'course_duration_1',
        'course_duration_1_unit',
        'class_duration_1',
        'class_duration_1_unit',
        'course_duration_2',
        'course_duration_2_unit',
        'class_duration_2',
        'class_duration_2_unit',
        'frequency_1',
        'frequency_2',
        'additional_info',
        'eligibility',
        'curriculum',
        'exam_criteria',
        'certification_authority',
        'course_category_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_category_id' => 'integer',
    ];

    public function courseCategory(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }
}
