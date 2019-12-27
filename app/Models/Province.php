<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name',
        'slug_name',
    ];
    public function district()
    {
        return $this->hasMany(District::class);
    }

    public function property()
    {
        return $this->hasMany(Property::class);
    }

}
