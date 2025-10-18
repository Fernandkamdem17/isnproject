<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lesson extends Model
{

    protected $fillable = [
        'user_id',
        'module_id',
        'title',
        'slug'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }


    //Génération unique du slug lors de la création
    private static function generateUniqueSlug($title)
    {
        return Str::slug($title) . '-' . uniqid();
    }

    protected static function booted()
    {
        static::creating(function ($lesson) {
            $lesson->slug = self::generateUniqueSlug($lesson->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
