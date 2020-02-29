<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /* The attributes that are mass assignable. */
    protected array $fillable = [
        'name', 'email', 'password',
    ];

    /* The attributes that should be hidden for arrays. */
    protected array $hidden = [
        'password', 'remember_token',
    ];

    /* The attributes that should be cast to native types. */
    protected array $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class);
    }
}
