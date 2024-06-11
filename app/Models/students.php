<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;


    public function group()
    {
        return $this->belongsTo(groups::class);
    }

    public function mentor()
    {
        return $this->hasOneThrough(mentors::class, groups::class);
    }
}
