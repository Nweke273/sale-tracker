<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Industry;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'salutation',
        'first_name', 'last_name', 'job_title_id',
        'industry_id', 'company', 'email',
        'phone', 'website', 'street',
        'city', 'state', 'zip_code', 'country', 'rating_id',
        'lead_status_id', 'loss_reason_id', 'lead_source_id', 'description'
    ];


    public function stages(): BelongsToMany
    {
        return $this->belongsToMany(Stage::class);
    }

    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }

    public function rating(): BelongsTo
    {
        return $this->belongsTo(Rating::class);
    }

    public function departments(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function pipeline(): BelongsTo
    {
        return $this->belongsTo(Pipeline::class);
    }

    public function lossReason(): BelongsTo
    {
        return $this->belongsTo(LossReason::class);
    }

    public function leadSource(): BelongsTo
    {
        return $this->belongsTo(LeadSource::class);
    }

    public function jobTitle(): BelongsTo
    {
        return $this->belongsTo(JobTitle::class);
    }
}
