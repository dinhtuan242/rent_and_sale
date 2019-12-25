<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'name', 'slug_name',
    ];
    
    public function properties()
    {
        return $this->belongsToMany(Property::class)->withTimestamps();
    }
}
