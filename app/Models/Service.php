<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['vendor_id', 'service_name', 'description', 'price'];

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


    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
