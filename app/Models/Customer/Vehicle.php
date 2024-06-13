<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;

    protected $table   = 'vehicle';
    protected $guarded = ['id'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customerId', 'id');
    }

    public function model_type(): BelongsTo
    {
        return $this->belongsTo(VehicleType::class, 'model', 'id');
    }
}
