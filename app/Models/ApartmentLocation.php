<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApartmentLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id', 'district', 'street_address',
        'region', 'city', 'digital_address'
    ];

    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }
}
