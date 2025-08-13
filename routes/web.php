<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\ImportAndExportController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PresenceLogController;
use App\Http\Controllers\QrCodeScanner;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'isTeacher', 'web'])->group(function () {

    Route::get('/', function () {
        return redirect()->route('mystudents');
    });

    Route::resource('students', StudentsController::class);
    Route::get('students/{student}/qrCodeInchecken', [StudentsController::class, 'qrCodeInchecken'])->name('students.qrCodeInchecken'); // staat hard gedcoded in qrcodeScanner.js

    Route::resource('groups', GroupsController::class);

    Route::get('mystudents', [StudentsController::class, 'myStudents'])->name('mystudents');
    Route::get('medications', [StudentsController::class, 'index'])->name('medications');

    Route::prefix('presencelog')->group(function () {
        Route::get('student/{student}', [PresenceLogController::class, 'create'])->name('presenceLog-create');
        Route::post('student/{student}', [PresenceLogController::class, 'store'])->name('presenceLog-store');
        Route::get('qrCodeScannerStore', [PresenceLogController::class, 'qrCodeScannerStore'])->name('presenceLog-qrCodeScannerStore');
        Route::get('{presence_log}', [PresenceLogController::class, 'show'])->name('presenceLog-show');
    });



    Route::resource('status', StatusController::class);

    Route::get('qrCodeScanner', [QrCodeScanner::class, 'qrCodeScanner'])->name('qrCodeScanner');
    Route::get('qrCodeScanner/{student}', [QrCodeScanner::class, 'qrCodeScannerInchecken'])->name('qrCodeScannerInchecken');
    Route::prefix('import')->group(function () {
        Route::get('', [ImportAndExportController::class, 'importAndExport'])->name('importAndExport');
        Route::post('', [ImportAndExportController::class, 'import'])->name('import');
    });

    Route::prefix('export')->group(function () {
        Route::get('backupRegistratie', [PdfController::class, 'backupRegistratie'])->name('backupRegistratie');
        Route::get('backupStudentsInfo', [PdfController::class, 'backupStudentsInfo'])->name('backupStudentsInfo');
        Route::get('straps', [ImportAndExportController::class, 'exportStraps'])->name('straps');
    });
});



Route::get('/login', function () {
    return redirect('/sdclient/redirect');
})->name('login');

Route::get('/sdclient/ready', function () {
    return redirect()->route('mystudents');
});
