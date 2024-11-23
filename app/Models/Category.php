<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    const IMAGE_DIRECTORY = '/images/';

    public function getImageUrl(): string
    {
        return URL::to(self::IMAGE_DIRECTORY . $this->image);
    }

    // Jika Anda menggunakan accessor
    public function getImageAttribute($value)
    {
        return URL::to(self::IMAGE_DIRECTORY . $value);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
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
}
