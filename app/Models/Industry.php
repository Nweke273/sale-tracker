<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function leads()
    {
        return $this->hasMany(Lead::class);;
    }

    protected $table = 'industries';
}
