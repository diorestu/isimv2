<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    /**
     * Get all of the kas for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kas(): HasMany
    {
        return $this->hasMany(Kas::class, 'id_user', 'id');
    }
}
