<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Module extends Model
{

    protected $fillable = [
        'user_id',
        'training_id',
        'title',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }


    //Génération unique du slug lors de la création
    private static function generateUniqueSlug($title)
    {
        return Str::slug($title) . '-' . uniqid();
    }

    protected static function booted()
    {
        static::creating(function ($module) {
            $module->slug = self::generateUniqueSlug($module->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
