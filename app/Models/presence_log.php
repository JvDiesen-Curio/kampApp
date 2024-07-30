<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presence_log extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'status_id',
        'note',
    ];

    public function students()
    {
        return $this->belongsTo(students::class);
    }

    public function statuses()
    {
        return $this->belongsTo(presence_log_statuses::class);
    }
}
