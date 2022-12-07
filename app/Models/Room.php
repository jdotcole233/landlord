<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'apartment_id', 'room_number', 'room_name', 'image_path'
    ];

    public function apartment (): BelongsTo
    {
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }

    public function tenants () : HasMany
    {
        return $this->hasMany(Tenant::class);
    }
}
