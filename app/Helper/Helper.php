<?php

namespace App\Helper;

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
}
