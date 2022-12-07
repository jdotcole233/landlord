<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id', 'first_name', 'other_name', 'last_name', 'email',
        'phone_number', 'monthly_rent', 'duration_from', 'duration_to',
        'number_of_occupants', 'total_rent', 'currency'
    ];

    public function room () : BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function payments () : HasMany
    {
        return $this->hasMany(ModeOfPayment::class);
    }

    public function tenant_origin () : HasOne
    {
        return $this->hasOne(TenantOrigin::class);
    }
}
