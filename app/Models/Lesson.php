<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    protected $fillable = [
        'title',
        'content',
        'chapiter_id',
        'video_url',
    ];

    public function chapiter(): BelongsTo
    {
        return $this->belongsTo(Chapiter::class, 'chapiter_id')->orderBy('order');
    }
}
