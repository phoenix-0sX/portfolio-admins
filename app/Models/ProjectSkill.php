<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

#[Table('project_skills', incrementing: true)]
#[Fillable([
    'project_id',
    'skill_id'
])]
class ProjectSkill extends Pivot
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    /**
     * Get the project that owns the skill.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the skill that owns the project.
     */
    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
}
