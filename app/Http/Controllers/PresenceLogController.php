<?php

namespace App\Http\Controllers;

use App\Models\presence_log;
use App\Models\students;
use Illuminate\Http\Request;

class PresenceLogController extends Controller
{
    public function create(students $student)
    {
        return view('presenceLog.create', ["student" => $student]);
    }
    public  function store(students $student)
    {
        $data = request()->validate([
            'status_id' => 'required| exists:presence_log_statuses,id',
            'student_id' => 'required',
            'note' => 'nullable',
        ]);



        presence_log::create([
            'student_id' => $data['student_id'],
            'status_id' => $data['status_id'],
            'note' => $data['note'],
        ]);


        return redirect()->route('students.show', $student->id);
    }

    function show(presence_log $presence_log)
    {
        return view('presenceLog.show', ["presence_log" => $presence_log]);
    }


    public function qrCodeScannerStore()
    {

        $data = request()->validate(
            [
                'statusid' => 'required| exists:presence_log_statuses,id',
                'qrCode' => 'required | exists:students,qr_code',
                'note' => 'nullable',
                'returnurl' => 'nullable'
            ],
            [
                'statusid.required' => 'Het status ID veld is verplicht.',
                'statusid.exists' => 'Het geselecteerde status ID is ongeldig.',
                'qrCode.required' => 'Het QR-code veld is verplicht.',
                'qrCode.exists' => 'De ingevoerde QR-code bestaat niet.',

            ]
        );


        $student = students::where('qr_code', $data['qrCode'])->first();

        presence_log::create([
            'student_id' =>  $student->id,
            'status_id' => $data['statusid'],
            'note' =>  isset($data['note']) ? $data['note'] : null,
        ]);

        if (isset($data['returnurl'])) return redirect($data['returnurl'])->withMessage('success', 'Status updated');
        return redirect()->route('qrCodeScanner', ['statusid' => $data['statusid']])->withMessage('success', 'Status updated');
    }
}
