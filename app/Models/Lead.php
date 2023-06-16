<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'salutation',
        'first_name', 'last_name', 'job_title',
        'industry', 'company', 'email_address',
        'phone_number', 'website', 'street_address',
        'city', 'state', 'postal_code', 'country', 'rating',
        'lead_status', 'loss_reason', 'lead_source', 'description'
    ];

    public function opportunity()
    {
        return $this->hasMany(Opportunity::class);
    }

    public function contact()
    {
        return $this->hasOne(contact::class);
    }
}
