<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index()
    {

        $search = request()->input('search');

        if ($search) {
            $groups = groups::where("code", "LIKE", '%' . $search . '%')->get()->sortBy('code');
        } else {
            $groups = groups::all()->sortBy('code');
        }


        return view('groups.index', [

            "groups" => $groups

        ]);
    }
}
