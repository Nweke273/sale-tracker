<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $fillable = [
        'opportunity_id',
        'name',
        'case_type_id',
        'case_origin_id',
        'priority_id',
        'pipeline_id',
        'case_reason_id',
        'description',
        'internal_comments',
        'lessons_learned'
    ];
}
