<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VehicleType extends Model
{
    use HasFactory;

    protected $table   = 'mvehicle_type';
    protected $guarded = ['id'];

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class, 'model', 'id');
    }
}
