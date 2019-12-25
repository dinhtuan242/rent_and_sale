<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'slug_name',
        'price',
        'feature_id',
        'type_id',
        'image',
        'district_id',
        'address',
        'user_id',
        'description',
        'isActive',
    ];
    public function features()
    {
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function districts()
    {
        return $this->belongsTo(District::class);
    }
    public function calendars()
    {
        return $this->belongsTo(Calendar::class);
    }
    public function types()
    {
        return $this->belongsTo(Type::class);
    }
}
