<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'phone',
        'avatar',
        'password',
        'isActive',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

}
