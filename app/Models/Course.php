<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    protected $fillable = [
        'title',
        'specialty_id',
        'description',
        'image_cover',
        'is_finish'
    ];

    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }

    public function chapiters(): HasMany
    {
        return $this->hasMany(Chapiter::class, 'course_id')->orderBy('order');
    }

    public function getImageUrlAttribute(): ?string
    {
        if (!$this->image_cover) {
            return null;
        }

        return Storage::disk('s3')->url($this->image_cover);
    }
}
