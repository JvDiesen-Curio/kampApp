<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentors extends Model
{
    use HasFactory;


    public function groups()
    {
        return $this->hasMany(groups::class, 'mentor_id');
    }

    public function students()
    {
        return $this->hasManyThrough(students::class, groups::class, "mentor_id", 'group_id');
    }
}
