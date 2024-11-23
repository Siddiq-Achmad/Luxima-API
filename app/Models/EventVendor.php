<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventVendor extends Model
{
    use HasFactory;

    protected $table = 'event_vendor';

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


    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function services()
    {
        return $this->hasMany(EventVendorService::class);
    }
}
