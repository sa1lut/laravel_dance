<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Lesson extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];  

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'lesson_teacher', 'lesson_id', 'teacher_id');
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'lesson_id', 'id');
    }

    public function getImageAttribute() {
        if (!$this->attributes['image']) {
            return '/img/lesson/no_image.png';
        }

        return Storage::url($this->attributes['image']);
    }
}
