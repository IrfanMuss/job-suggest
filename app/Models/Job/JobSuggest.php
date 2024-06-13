<?php

namespace App\Models\Job;

use App\Models\Reminder\Reminder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobSuggest extends Model
{
    use HasFactory;

    protected $table   = 'job_suggest';
    protected $guarded = ['id'];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'jobId', 'id');
    }


    public function suggest_category(): BelongsTo
    {
        return $this->belongsTo(JobSuggestCategory::class, 'category', 'id');
    }

    public function reminders(): HasMany
    {
        return $this->hasMany(Reminder::class, 'jobSuggestId', 'id');
    }
}
