<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'user_id',
    'description',
    'graduation_title',
    'graduation_place',
    'graduation_month',
    'graduation_year',
])]
class Education extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'graduationMonth' => 'integer',
            'graduationYear'  => 'integer',
        ];
    }

    /**
     * Get the user that owns the education.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
