<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'account' => 'object'
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
