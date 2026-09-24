<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'logo',
        'description',
        'phone',
        'whatsapp',
        'instagram',
        'address',
        'opening_hours',
    ];
}
