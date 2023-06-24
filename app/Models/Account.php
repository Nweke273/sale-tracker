<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'industry_id',
        'lead_source_id',
        'parent_account_id',
        'phone',
        'alt_phone',
        'email',
        'street',
        'city',
        'state',
        'zip_code',
        'country',
        'website',
        'fax',
        'user_id',
        'no_of_employees',
        'account_type_id',
        'annual_revenue',
        'billing_street',
        'billing_city',
        'billing_state',
        'billing_zip_code',
        'billing_country',
        'shipping_street',
        'shipping_city',
        'shipping_state',
        'shipping_zip_code',
        'shipping_country',
        'description',
    ];
}
