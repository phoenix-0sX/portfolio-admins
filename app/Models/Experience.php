<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable([
    'user_id',
    'title',
    'company',
    'company_icon_hash_id'
])]
class Experience extends Model
{
    /**
     * Get the user that owns the Experience.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The skills that belong to the experience.
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'experience_skills', 'experience_id', 'skill_id')
            ->withPivot('start_date', 'end_date', 'is_current_job')
            ->using(ExperienceSkill::class);
    }
}
