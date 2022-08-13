<?php

namespace App\Models;

use App\Notifications\EmailVerificationNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const ROLE_ADMIN = 1;
    const ROLE_STAFF = 2;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'name'=>'string',
        'email'=>'string',
        'password'=>'string',
        'phone'=>'string',
        'role'=>'integer'
    ];

    public function sendEmailVerificationNotification(){
    
        $otp = rand(100000,999999);

        SendEmailOtp::updateOrCreate(['email'=>$this->email],['otp'=>$otp]);
        // $this->notify(new EmailVerificationNotification($otp));
        return $otp;
    }
}
