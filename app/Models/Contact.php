<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'account_id',
        'salutation',
        'first_name',
        'last_name',
        'date_of_birth',
        'department_id',
        'reporting_to_id',
        'job_title_id',
        'lead_source_id',
        'user_id',
        'phone',
        'alt_phone',
        'email',
        'alt_email',
        'street',
        'zip_code',
        'country',
        'description',
        'website',
    ];
}
