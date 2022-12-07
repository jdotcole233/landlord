<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = ['landlord_id','apartment_name', 'image_path'];

    public function landlord (): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'landlord_id');
    }

    public function location (): HasOne
    {
        return $this->hasOne(ApartmentLocation::class);
    }

    public function rooms () : HasMany
    {
        return $this->hasMany(Room::class);
    }
    
}
