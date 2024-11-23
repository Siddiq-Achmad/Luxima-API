<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'event_name', 'event_date', 'event_time', 'location', 'slug', 'image', 'description', 'tags'];

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

    public function services()
    {
        return $this->belongsToMany(Service::class, 'event_service')->withPivot('quantity');
    }

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class, 'event_vendor')->withPivot('quantity');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
