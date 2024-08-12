<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    use HasFactory;


    public function groups()
    {
        return $this->hasMany(Groups::class, 'mentor_id');
    }

    public function students()
    {
        return $this->hasManyThrough(Students::class, Groups::class, "mentor_id", 'group_id');
    }
}
