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
            "id" => $this->id,
            "salutation" => $this->salutation,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "job_title" => $this->job_title,
            "company" => $this->company,
            "email" => $this->email,
            "phone" => $this->phone,
            "alt_phone" => $this->alt_phone,
            "website" => $this->website,
            "street" => $this->street,
            "city" => $this->city,
            "state" => $this->state,
            "zip_code" => $this->zip_code,
            "country" => $this->country,
            "description" => $this->description,
            "pipeline" => [
                'name' => $this->pipeline->name,
                'type' => $this->pipeline->type
            ],
            "industry" => [
                "title" => $this->industry->title
            ],
            "job_title" => [
                "title" => $this->jobTitle->title,
                "type" => $this->jobTitle->type,
            ],
            "rating" => [
                "title" => $this->rating->title,
            ],
            "loss_reason" => [
                "title" => $this->lossReason->title,
                "type" => $this->lossReason->type,
            ],
            "source" => [
                "title" => $this->leadSource->title,
                "type" => $this->leadSource->type,
            ],
            "created_at" => "2023-06-21T02=>36=>49.000000Z",
            "updated_at" => "2023-06-21T02=>36=>49.000000Z"
        ];
    }
}
