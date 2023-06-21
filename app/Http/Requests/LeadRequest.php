<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => ['required'],
            'salutation' => ['max:20'],
            'first_name' => ['max:50'],
            'last_name' => ['max:50'],
            'job_title_id' => ['required'],
            'industry_id' => ['max:50'],
            'company' => ['max:50'],
            'rating_id' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'website' => [],
            'street' => [],
            'city' => ['required'],
            'state' => ['required'],
            'zip_code' => [],
            'country' => ['required'],
            'rating' => [],
            'lead_status' => [],
            'loss_reason' => [],
            'lead_source' => [],
            'description' => []
        ];
    }
}
