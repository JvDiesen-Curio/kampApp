<?php

namespace App\Http\Controllers;

use App\Models\groups;
use App\Models\students;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return redirect()->route('students.index', ['statusid' => 1]);
    }
}
