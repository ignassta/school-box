<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'lecture_id');
    }
}
