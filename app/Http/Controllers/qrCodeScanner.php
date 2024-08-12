<?php

namespace App\Http\Controllers;

use App\Models\Students;


class QrCodeScanner extends Controller
{


    public function qrCodeScanner()
    {

        return view('qrCodeScanner.qrcode-scanner', [
            'onlyScanner' =>  request()->input('onlyScanner') ? true : false,
            'statusid' => request()->input('statusid') ? request()->input('statusid') : 1,
            "calbackurl" => request()->input('calbackurl') ? request()->input('calbackurl') : route("presenceLog-qrCodeScannerStore"),
            "returnurl" => request()->input('returnurl') ? request()->input('returnurl') : null
        ]);
    }


    public function qrCodeScannerInchecken(students $student)
    {
        return view('qrCodeScanner.qrcode-scanner', [
            'onlyScanner' =>  request()->input('onlyScanner') ? true : false,
            "status" => false,
            "calbackurl" => " /students/" . $student->id . " /qrCodeInchecken",
            "returnurl" => request()->input('returnurl') ? request()->input('returnurl') : null

        ]);
    }
}
