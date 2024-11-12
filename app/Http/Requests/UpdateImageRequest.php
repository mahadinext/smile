<?php

namespace App\Http\Requests;

use App\Models\WebImage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('edit_image');
    }

    public function rules()
    {
        $currentFormImage = WebImage::first();
        $currentLogo = ($currentFormImage && $currentFormImage->logo) ? $currentFormImage->logo : null;
        $currentFavicon = ($currentFormImage && $currentFormImage->favicon) ? $currentFormImage->favicon : null;

        return [
            'logo' => [
                $currentLogo ? 'nullable' : 'required',
                'file',
                'mimes:jpeg,png,gif,bmp,svg,jpg',
                'dimensions:min_width=250,min_height=82,max_width=250,max_height=82',
            ],
            'favicon' => [
                $currentFavicon ? 'nullable' : 'required',
                'file',
                'mimes:jpeg,png,gif,bmp,svg,jpg',
                'dimensions:min_width=150,min_height=164,max_width=150,max_height=164',
            ],
        ];
    }

    public function messages()
    {
        return [];
    }
}