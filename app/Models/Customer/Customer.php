<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $table   = 'customer';
    protected $guarded = ['id'];

    public function vehicles(): HasMany
    {
        return $this->hasMany(Customer::class, 'customerId', 'id');
    }
}
