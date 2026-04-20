<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable([
    'title',
    'tag',
    'logo_icon_hash_id',
])]
class Skill extends Model
{

    /**
     * The users that belong to the skill.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_skills', 'skill_id', 'user_id')
            ->withPivot('level')
            ->using(UserSkill::class);
    }

    /**
     * The experiences that belong to the skill.
     */
    public function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class, 'experience_skills', 'skill_id', 'experience_id')
            ->withPivot('start_date', 'end_date', 'is_current_job')
            ->using(ExperienceSkill::class);
    }

    /**
     * The projects that belong to the skill.
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_skills', 'skill_id', 'project_id')
            ->using(ProjectSkill::class);
    }
}
