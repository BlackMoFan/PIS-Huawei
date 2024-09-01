<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'current_location',
        'birth_date',
        'phone_number',
        'nearest_center',
        'pending',
        'additional_info'
    ];
}
