<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenantOrigin extends Model
{
    use HasFactory;
    protected $fillable = [
        '', 'citizenship', 'id_number', 'country'
    ];

    public function tenant (): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
