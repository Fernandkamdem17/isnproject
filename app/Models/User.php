<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'username',
        'password',
        'slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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
        ];
    }


    public function announces()
    {
        return $this->hasMany(Announce::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function recentsnews()
    {
        return $this->hasMany(Recentsnew::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }



    //Génération unique du slug lors de la création
    private static function generateUniqueSlug($first_name)
    {
        return Str::slug($first_name) . '-' . uniqid();
    }

    protected static function booted()
    {
        static::creating(function ($user) {
            $user->slug = self::generateUniqueSlug($user->first_name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
