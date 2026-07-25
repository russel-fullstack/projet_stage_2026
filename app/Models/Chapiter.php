<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapiter extends Model
{
    protected $fillable = [
        'title',
        'course_id',
        'order',
    ];
    protected $table = 'chapiters';

    public function course() : BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons() : HasMany
    {
        return $this->hasMany(Lesson::class, 'chapiter_id');
    }
}
