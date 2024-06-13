<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use HasFactory;

    protected $table   = 'users';
    protected $guarded = ['id'];

    public function role(): BelongsTo
    {
        return $this->belongsTo(UserRole::class, 'role', 'id');
    }
}
