<?php

namespace App\Models\Reminder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reason extends Model
{
    use HasFactory;

    protected $table   = 'mreason';
    protected $guarded = ['id'];

    public function reason_category(): BelongsTo
    {
        return $this->belongsTo(ReasonCategory::class, 'category', 'id');
    }

    public function reminders(): HasMany
    {
        return $this->hasMany(Reminder::class, 'reason', 'id');
    }
}
