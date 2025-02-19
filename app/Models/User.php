<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use App\Models\UserDetail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getFirstNameAttribute()
    {
        $nameParts = explode(' ', trim($this->name));

        $count = count($nameParts);

        if ($count === 1) {
            return $nameParts[0]; // Jika hanya satu kata, jadikan First Name
        } elseif ($count === 2) {
            return $nameParts[0]; // Jika dua suku kata, hanya ambil kata pertama
        } elseif ($count === 3) {
            return implode(' ', array_slice($nameParts, 0, 2)); // Ambil dua kata pertama
        } else {
            return implode(' ', array_slice($nameParts, 0, 2)); // Ambil dua kata pertama
        }
    }

    /**
     * Accessor untuk mendapatkan Last Name
     */
    public function getLastNameAttribute()
    {
        $nameParts = explode(' ', trim($this->name));

        $count = count($nameParts);

        if ($count === 1) {
            return ''; // Jika hanya satu kata, Last Name kosong
        } elseif ($count === 2) {
            return $nameParts[1]; // Jika dua suku kata, hanya ambil kata kedua
        } elseif ($count === 3) {
            return $nameParts[2]; // Jika tiga suku kata, ambil kata terakhir
        } else {
            return implode(' ', array_slice($nameParts, 2)); // Jika lebih dari tiga, ambil semua setelah dua kata pertama
        }
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


    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'user_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id');
    }

    public function details()
    {
        return $this->hasOne(UserDetail::class);
    }
}
