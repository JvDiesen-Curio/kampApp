<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Support\Facades\URL;

class QrCodeScanner extends Controller
{


    public function qrCodeScanner()
    {

        return view('qrCodeScanner.qrcode-scanner', [
            'statusid' => request()->input('statusid') ? request()->input('statusid') : 1,
            "calbackurl" => route("presenceLog-qrCodeScannerStore"),
            "returnurl" => request()->input('returnurl') ? request()->input('returnurl') : null
        ]);
    }


    public function qrCodeScannerInchecken(students $student)
    {
        return view('qrCodeScanner.qrcode-scanner', [
            "status" => false,
            "calbackurl" => " /students/" . $student->id . " /qrCodeInchecken",
            "returnurl" => request()->input('returnurl') ? request()->input('returnurl') : null

        ]);
    }
}
