<?php

namespace App\Http\Requests;

use App\Models\Order;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('edit_order');
    }

    public function rules()
    {
        return [
            'student_id' => [
                'required',
                'integer',
                'exists:users,id'
            ],
            'course_id' => [
                'required',
                'array',
            ],
            'course_id.*' => [
                'required',
                'integer',
                'exists:courses,id',
            ],
            'order_type' => [
                'required',
                'integer',
            ],
            'transaction_id' => [
                Rule::requiredIf(function () {
                    return ($this->order_type == Order::NEW_PAID_ORDER || $this->order_type == Order::TEST_ORDER);
                }),
                'string',
                'max:150',
            ],
            'remarks' => [
                'nullable',
                'string',
                'max:255',
            ],
        ];
    }

    public function messages()
    {
        return [];
    }
}
