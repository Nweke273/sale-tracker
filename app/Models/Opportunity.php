<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lead_id',
        'expected_amount',
        'contact_id',
        'industry_id',
        'opportunity_type_id',
        'user_id',
        'lead_source_id',
        'rating_id',
        'pipeline_id',
        'loss_reason_id',
        'quote_id',
        'description'
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
