<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'user_id',
    'presentation_sentence',
    'job_intro_sentence',
    'job_desc_sentence',
    'job_desc_text',
])]
class Biography extends Model
{
    /**
     * Get the user that owns the Biography.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
