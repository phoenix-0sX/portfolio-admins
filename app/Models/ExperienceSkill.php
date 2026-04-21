<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

#[Table('experience_skills', incrementing: true)]
#[Fillable([
    'experience_id',
    'skill_id',
    'start_date',
    'end_date',
    'is_current_job',
])]
class ExperienceSkill extends Pivot
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'is_current_job' => 'boolean'
        ];
    }

    /**
     * Get the experience that owns the skill.
     */
    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class);
    }

    /**
     * Get the skill that owns the experience.
     */
    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
}
