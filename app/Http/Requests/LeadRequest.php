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
            'job_title' => ['required'],
            'industry' => ['max:50'],
            'company' => ['max:50'],
            'email_address' => ['required'],
            'phone_number' => ['required'],
            'website' => [],
            'street_address' => [],
            'city' => ['required'],
            'state' => ['required'],
            'postal_code' => [],
            'country' => ['required'],
            'rating' => [],
            'lead_status' => [],
            'loss_reason' => [],
            'lead_source' => [],
            'description' => []
        ];
    }
}
