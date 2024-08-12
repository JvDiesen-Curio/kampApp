<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;


    public function group()
    {
        return $this->belongsTo(Groups::class);
    }

    public function mentor()
    {
        return $this->hasOneThrough(Mentors::class, Groups::class);
    }

    public function presence_logs()
    {
        return $this->hasMany(Presence_log::class, "student_id");
    }



    public function getLatestStatus($recanMinutes = 120)
    {
        $status = $this->presence_logs()->latest()->first();
        if ($status && $status->created_at < now()->subMinutes($recanMinutes) && $status->status_id != 3) {
            $status->status_id = 5;
        }
        return  $status;
    }


    public function fullname()
    {
        return $this->first_name . " " . $this->last_name;
    }
}
