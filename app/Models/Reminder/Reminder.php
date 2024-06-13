<?php

namespace App\Models\Reminder;

use App\Models\Auth\User;
use App\Models\Job\JobSuggest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reminder extends Model
{
    use HasFactory;

    protected $table   = 'job_suggest_reminder';
    protected $guarded = ['id'];

    public function reason_detail(): BelongsTo
    {
        return $this->belongsTo(Reason::class, 'reason', 'id');
    }

    public function followup(): BelongsTo
    {
        return $this->belongsTo(User::class, 'followupBy', 'id');
    }

    public function job_suggest(): BelongsTo
    {
        return $this->belongsTo(JobSuggest::class, 'jobSuggestId', 'id');
    }
}
