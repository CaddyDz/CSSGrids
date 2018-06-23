<?php

namespace Fresh;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'first_name', 'remember_token',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeNotActive($query)
    {
        return $query->where('active', false);
    }

    public function scopeReputationGreaterThan($query, $reputation)
    {
        return $query->where('reputation', '>=', $reputation);
    }
}
