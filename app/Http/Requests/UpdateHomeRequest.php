<?php

namespace App\Http\Requests;

use App\Models\HomeContents;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateHomeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('edit_home');
    }

    public function rules()
    {
        $sectionId = $this->input('section_id');
        $homeContents = HomeContents::where("section_id", $sectionId)->first();
        $isDescriptionrequired = ($sectionId == HomeContents::HERO_SECTION) ? 'required' : 'nullable';

        $rules = [
            'section_id' => [
                'required',
                'integer',
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'subtitle' => [
                'required',
                'string',
                'max:255',
            ],
            'description' => [
                $isDescriptionrequired,
                'string',
                'max:400',
            ],
        ];

        return $rules;
    }

    public function messages()
    {
        return [];
    }
}
