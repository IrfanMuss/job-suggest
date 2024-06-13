<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobSuggestCategory extends Model
{
    use HasFactory;

    protected $table   = 'msuggest_category';
    protected $guarded = ['id'];

    public function job_suggests(): HasMany
    {
        return $this->hasMany(JobSuggest::class, 'category', 'id');
    }
}
