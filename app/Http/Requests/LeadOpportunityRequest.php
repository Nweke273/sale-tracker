<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadOpportunityRequest extends FormRequest
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
            'lead_id' => ['required'],
            'user_id' => ['required'],
            'stage_id' => ['required'],
            'opportunity_id' => ['required'],
            'opportunity_status' => ['required'],
            'pipeline_id' => ['required']
        ];
    }
}
