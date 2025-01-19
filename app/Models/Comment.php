<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'user_id',
        'content',
    ];

    // Define the relationship to the Blog model
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
