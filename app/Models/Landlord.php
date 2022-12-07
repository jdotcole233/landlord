<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Landlord extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'other_name', 'last_name',
        'phone_number'
    ];

    public function apartments(): HasMany
    {
        return $this->hasMany(Apartment::class, 'landlord_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
