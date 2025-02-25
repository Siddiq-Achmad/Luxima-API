<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'name',
        'address',
        'rating',
        'review_count',
        'description',
        'image',
        'is_featured',
        'verified',
        'is_active',
        'gallery',
        'owner',
        'contact',
        'social',
        'working_hours',
        'coordinates',
        'meta',
        'user_id',
        'category_id',
        'location_id',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'verified' => 'boolean',
        'is_active' => 'boolean',
        'gallery' => 'array',
        'owner' => 'array',
        'contact' => 'array',
        'social' => 'array',
        'working_hours' => 'array',
        'coordinates' => 'array',
        'meta' => 'array',

    ];
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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function offlineEvents()
    {
        return $this->hasMany(EventOffline::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'vendor_tag');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
