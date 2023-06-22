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
            'user_id' => [],
            'salutation' => [],
            'first_name' => [],
            'last_name' => ['max:50'],
            'job_title_id' => [],
            'industry_id' => ['max:50'],
            'company' => ['max:50'],
            'rating_id' => [],
            'pipeline_id' => [],
            'email' => [],
            'phone' => [],
            'website' => [],
            'street' => [],
            'city' => [],
            'state' => [],
            'zip_code' => [],
            'country' => [],
            'rating' => [],
            'lead_status_id' => [],
            'loss_reason_id' => [],
            'lead_source_id' => [],
            'description' => []
        ];
    }
}
