<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'user_id',
        'stage_id',
        'opportunity_id',
        'opportunity_status',
        'pipeline_id'
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
