<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence_log extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'status_id',
        'note',
    ];

    public function students()
    {
        return $this->belongsTo(Students::class);
    }

    public function statuses()
    {
        return $this->belongsTo(Presence_log_statuses::class);
    }
}
