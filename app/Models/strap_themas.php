<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strap_themas extends Model
{
    use HasFactory;

    public function groups()
    {
        return $this->hasMany(groups::class, 'thema_id');
    }
}
