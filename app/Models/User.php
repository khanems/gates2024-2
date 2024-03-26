<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'email_verified_at',
        'role',
        'password',
        'user_id',        
    ];

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

    public function getLogoPath(): string
    {
        // Assuming logo.png is saved in the public directory
        return public_path('logo.png');
    }

    public function getImageAttribute($value): ?string
    {
        if ($value) {
            $baseUrl = url('/');
            return $baseUrl . '/assets/images/profile/' . $value;
        }

        return null;
    }


    public function subUsers()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }



}
