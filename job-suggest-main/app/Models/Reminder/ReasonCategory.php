<?php

namespace App\Models\Reminder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReasonCategory extends Model
{
    use HasFactory;

    protected $table    = "mreason_category";
    protected $guarded  = [];
}
