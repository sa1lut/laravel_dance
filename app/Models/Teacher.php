<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_teacher', 'teacher_id', 'lesson_id');
    }

    public function getImageAttribute() {
        if (!$this->attributes['image']) {
            return '/img/teacher/no_image.png';
        }

        return Storage::url($this->attributes['image']);
    }

    // public function subscriptions()
    // {
    //     return $this->hasMany(Subscription::class);
    // }
}
