<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'birth_date',
        'gender',
        'nationality',
        'occupation',
        'bio',
        'bg_image',
    ];

    protected $casts = [
        'social_media' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
