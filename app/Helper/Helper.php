<?php

namespace App\Helper;

use App\Models\CourseCategory;
use App\Models\WebColor;
use App\Models\WebImage;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

    /**
     * @return collection
     */
    public static function getWebColor()
    {
        return Cache::remember("web-color-cache", 60*60*24, function () {
            return WebColor::first();
        });
    }

    /**
     * @return collection
     */
    public static function getWebImages()
    {
        return Cache::remember("web-image-cache", 60*60*24, function () {
            return WebImage::first();
        });
    }

    /**
     * Save the uploaded image to the specified directory and return the URL.
     *
     * @param \Illuminate\Http\UploadedFile $imageRequest The uploaded image file.
     * @param string $directory The directory where the image should be stored.
     * @param string $imageName The name of the image file to store.
     * @return string|null The URL of the saved image or null if there was an error.
     */
    public static function saveImage($imageRequest, $directory, $imageName)
    {
        try {
            $imagePath = $imageRequest->storeAs($directory, $imageName, 'public');
            return Storage::url($imagePath);
        } catch (Exception $exception) {
            Log::error("Helper::saveImage()", [$exception]);
            return null;
        }
    }
}
