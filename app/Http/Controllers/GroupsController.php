<?php

namespace App\Http\Controllers;

use App\Models\Groups;


class GroupsController extends Controller
{
    public function index()
    {

        $search = request()->input('search');

        if ($search) {
            $groups = Groups::where("code", "LIKE", '%' . $search . '%')->get()->sortBy('code');
        } else {
            $groups = Groups::all()->sortBy('code');
        }


        return view('groups.index', [

            "groups" => $groups

        ]);
    }
}
