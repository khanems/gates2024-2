<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'website_name',
        'tagline',
        'dark_logo',
        'light_logo',
        'favicon',
        'email',
        'address',
        'meta_description',
        'meta_keywords',
        'country',
        'phone_number',
        'timezone',
        'currency',
        'currency_symbol',
        'currency_symbol_location',
        'time_format',
        'date_format'
    ];

    public function getDarkLogoAttribute($value): ?string
    {
        if ($value) {
            return url('/storage/' . $value);
        }

        return null;
    }

    /**
     * Accessor for the light logo image URL.
     */
    public function getLightLogoAttribute($value): ?string
    {
        if ($value) {
            return url('/storage/' . $value);
        }

        return null;
    }

    /**
     * Accessor for the favicon image URL.
     */
    public function getFaviconAttribute($value): ?string
    {
        if ($value) {
            return url('/storage/' . $value);
        }

        return null;
    }
}
