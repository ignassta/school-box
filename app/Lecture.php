<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function file()
    {
        return $this->hasMany(File::class);
    }
}
