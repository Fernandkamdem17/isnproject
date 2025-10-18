<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Training extends Model
{

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'img',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
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
        static::creating(function ($training) {
            $training->slug = self::generateUniqueSlug($training->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
