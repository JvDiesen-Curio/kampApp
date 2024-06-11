<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    use HasFactory;



    public function mentor()
    {
        return $this->belongsTo(mentors::class);
    }

    public function students()
    {
        return $this->hasManyThrough(students::class, mentors::class);
    }
}
