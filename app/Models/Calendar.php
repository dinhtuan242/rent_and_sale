<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'property_id',
        'time',
        'phone',
        'email',
        'note',
    ];

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }
}
