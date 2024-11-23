<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'city', 'state', 'country', 'postal_code'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'city'
            ]
        ];
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s') : null;
    }


    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
