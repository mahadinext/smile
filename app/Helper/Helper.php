<?php

namespace App\Helper;

use App\Models\CourseCategory;
use Illuminate\Support\Facades\Cache;

class Helper
{
    /**
     * @return array
     */
    public static function getAllReligion(): array
    {
        return [
            'Islam',
            'Hinduism',
            'Buddhism',
            'Christianity',
            'Other',
        ];
    }

    /**
     * @return array
     */
    public static function getAllMaritalStatus(): array
    {
        return [
            'Single',
            'Married',
            'Divorced',
            'Widowed',
            'In a relationship',
        ];
    }

    /**
     * @return array
     */
    public static function getAllGender(): array
    {
        return [
            'Male',
            'Female',
            'Transgender',
            'Other',
            'Prefer not to say',
        ];
    }

    /**
     * @return collection
     */
    public static function getAllCourseCategory(): array
    {
        return Cache::remember("all-course-category-cache", 60*60*24, function () {
            return CourseCategory::all()->pluck('name', 'id')->toArray();
        });
    }
}
