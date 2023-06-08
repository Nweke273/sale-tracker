<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'salutation' => $this->salutation,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'job_title' => $this->job_title,
            'industry' => $this->industry,
            'company' => $this->company,
            'email_address' => $this->email_address,
            'phone_number' => $this->phone_number,
            'website' => $this->website,
            'street_address' => $this->street_address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'country' => $this->country,
            'rating' => $this->rating,
            'lead_status' => $this->lead_status,
            'loss_reason' => $this->loss_reason,
            'lead_source' => $this->lead_source,
            'description' => $this->description
        ];
    }
}
