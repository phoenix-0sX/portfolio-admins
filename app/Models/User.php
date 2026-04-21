<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Fortify\TwoFactorAuthenticatable;

#[Fillable([
    'name',
    'email',
    'password',
    'full_name',
    'phone',
    'birthdate',
    'photo_hash_id',
    'resume_hash_id',
    'email_verified_at',
    'role',
    'access_level', // 0: user, 1: admin
    'postal_code',
    'region',
    'city',
    'country'
])]
#[Hidden(['password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birthdate' => 'date',
            'access_level' => 'integer'
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    /**
     * Get the biography associated to the user.
     */
    public function biography(): HasOne
    {
        return $this->hasOne(Biography::class, 'user_id');
    }

    /**
     * Get the educations for the user.
     */
    public function educations(): HasMany
    {
        return $this->hasMany(Education::class, 'user_id');
    }


    /**
     * Get the experiences for the user.
     */
    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class, 'user_id');
    }


    /**
     * Get the projects for the user.
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'user_id');
    }

    /**
     * The skills that belong to the user.
     */
    public function skils(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'user_skills', 'user_id', 'skill_id')
            ->withPivot('level')
            ->using(UserSkill::class);
    }
}
