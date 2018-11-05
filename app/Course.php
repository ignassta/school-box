<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $table = 'courses';
    protected $dates = ['deleted_at'];

    public function group()
    {
        return $this->hasMany(Group::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault(['name' => '-']);
    }
}
