<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $fillable = [
        'name'
    ];

    public function specialties(): HasMany
    {
        return $this->hasMany(Specialty::class);
    }
}
