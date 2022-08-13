<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendEmailOtp extends Model
{
    use HasFactory;
    protected $fillable = [
        'otp',
        'email',
    ];
}
