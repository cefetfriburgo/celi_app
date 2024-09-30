<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'adm',
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($user) {
            if ($user->isDirty('adm') && $user->getOriginal('adm') === 0) {
                $user->adm = 0;
            }
        });
    }

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'role'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => 'string',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
