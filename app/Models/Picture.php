<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'project_id',
    'filename',
    'hash_id',
    'type', // 0: gallery, 1: cover
])]
class Picture extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => 'integer'
        ];
    }

    /**
     * Get the project that owns the picture.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
