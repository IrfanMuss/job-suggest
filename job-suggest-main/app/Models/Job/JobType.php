<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobType extends Model
{
    use HasFactory;

    protected $table   = 'mjob_type';
    protected $guarded = ['id'];

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class, 'type', 'id');
    }
}
