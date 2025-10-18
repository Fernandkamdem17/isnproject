<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Testimonial extends Model
{

    protected $fillable = [
        'user_id',
        'name',
        'training',
        'description',
        'img',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //Génération unique du slug lors de la création
    private static function generateUniqueSlug($title)
    {
        return Str::slug($title) . '-' . uniqid();
    }

    protected static function booted()
    {
        static::creating(function ($testimonial) {
            $testimonial->slug = self::generateUniqueSlug($testimonial->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
