<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ModeOfPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenant_id', 'payment_type', 'payment_details', 'payment_date'
    ];

    public function tenant () : HasOne
    {
        return $this->hasOne(Tenant::class, 'tenant_id');
    }
}
