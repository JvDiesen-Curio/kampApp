<?php

namespace App\Http\Controllers;


class StatusController extends Controller
{
    public function index()
    {
        return redirect()->route('students.index', ['statusid' => 1]);
    }
}
