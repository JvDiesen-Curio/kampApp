<?php

namespace App\Http\Controllers;

use App\Models\Mentors;
use App\Models\Presence_log;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index(Request $request)
    {
        $students =   Students::where(function ($query) use ($request) {
            if ($request->input('search')) {
                $query->where('first_name', 'like', '%' . $request->input('search') . '%')
                    ->orWhere('last_name', 'like', '%' . $request->input('search') . '%');
            }

            if ($request->input('groupid')) {
                $query->where('group_id', '=',  $request->input('groupid'));
            }

            if ($request->input('qrCode')) {
                $query->where('qr_code', '=',  $request->input('qrCode'));
            }

            if ($request->input('statusid') && $request->input('statusid') == 'inchecken') {
                $query->where('qr_code', '=',  null);
            }
        })->get()->sortBy('last_name');


        if ($request->input('statusid') && $request->input('statusid') != 'inchecken') {
            $filtered =  $students->filter(function ($student) use ($request) {
                $status = $student->getLatestStatus($request->input('recanMinutes') ? $request->input('recanMinutes') : null);
                if (!$status) return false;
                return $status->status_id == $request->input('statusid');
            });

            $students =  $filtered->all();
        }


        return view('students.index', ["students" => $students]);
    }

    public function myStudents()
    {
        $students = [];

        $search = request()->input('search');

        $mentor = Mentors::where('code', auth()->user()->id)->first();
        if ($mentor) {

            if ($search) {
                $students = $mentor->students->filter(function ($student) use ($search) {
                    return strpos($student->fullname(), $search) !== false;
                });
            } else {
                $students = $mentor->students;
            }
        }
        return view('students.index', ["students" => $students]);
    }

    public function show(Students $student)
    {

        return view('students.show', ["student" => $student]);
    }

    public function qrCodeInchecken(Students $student)
    {
        $data = request()->validate([
            'qrCode' => 'required | unique:students,qr_code',
            'returnurl' => '',
        ], [
            'qrCode.required' => 'Het QR-code veld is verplicht.',
            'qrCode.unique' => 'De QR-code moet uniek zijn, deze QR-code is al geregistreerd.',
        ]);

        $student->qr_code = $data['qrCode'];
        $student->save();

        Presence_log::create([
            'student_id' => $student->id,
            'status_id' => 1,
            'registrant' => auth()->user()->id,
        ]);

        if ($data['returnurl']) return redirect($data['returnurl'])->withMessage('success', 'QR code inchecken');;
        return redirect()->route('students.show', $student->id)->withMessage('success', 'QR code inchecken');;
    }
}
