<?php

namespace App\Http\Controllers;

use App\Imports\studentsImport;
use App\Models\groups;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

    public function importForm()
    {

        return view('import.importForm');
    }

    public function import()
    {

        $data = request()->validate([
            'file' => ['required', 'file'],
        ]);

        Excel::import(new studentsImport, $data['file']);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }

    public function startRow(): int
    {
        return 2;
    }
}
