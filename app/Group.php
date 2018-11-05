<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withDefault(['title' => '-']);
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }

    public function student()
    {
        return $this->belongsToMany(User::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault(['name' => '-']);
    }

}
