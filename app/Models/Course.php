<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
