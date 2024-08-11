<?php

namespace App\Http\Controllers;

use App\Imports\studentsImport;
use App\Models\groups;
use App\Models\students;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PdfController extends Controller
{

    public function backupRegistratie()
    {
        $groups = groups::with('students')->get()->sortBy('code');
        $pdf = Pdf::loadView('pdf.backup-registratie', [
            'groups' => $groups
        ]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('backup-registratie.pdf');
    }
    public function backupStudentsInfo()
    {
        $groups = groups::with('students')->get()->sortBy('code');
        $pdf = Pdf::loadView('pdf.backup-students-info', [
            'groups' => $groups
        ]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('backup-students-info');
    }
}
