<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    protected $table   = 'jobs';
    protected $guarded = ['id'];

    public function job_type(): BelongsTo
    {
        return $this->belongsTo(JobType::class, 'type', 'id');
    }
}
