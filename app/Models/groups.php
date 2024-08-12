<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    use HasFactory;



    public function mentor()
    {
        return $this->belongsTo(Mentors::class);
    }

    public function students()
    {
        return $this->hasMany(students::class, 'group_id');
    }

    public function thame()
    {
        return $this->belongsTo(Strap_themas::class, 'thema_id');
    }
}
