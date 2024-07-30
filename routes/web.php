<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\ImportController;
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

    Route::prefix('presencelog')->group(function () {
        Route::get('student/{student}', [PresenceLogController::class, 'create'])->name('presenceLog-create');
        Route::post('student/{student}', [PresenceLogController::class, 'store'])->name('presenceLog-store');
        Route::get('qrCodeScannerStore', [PresenceLogController::class, 'qrCodeScannerStore'])->name('presenceLog-qrCodeScannerStore');
        Route::get('{presence_log}', [PresenceLogController::class, 'show'])->name('presenceLog-show');
    });



    Route::resource('status', StatusController::class);

    Route::get('qrCodeScanner', [QrCodeScanner::class, 'qrCodeScanner'])->name('qrCodeScanner');
    Route::get('qrCodeScanner/{student}', [QrCodeScanner::class, 'qrCodeScannerInchecken'])->name('qrCodeScannerInchecken');

    Route::get('import', [ImportController::class, 'importForm'])->name('importForm');
    Route::post('import', [ImportController::class, 'import'])->name('import');
});



Route::get('/login', function () {
    return redirect('/sdclient/redirect');
})->name('login');

Route::get('/sdclient/ready', function () {
    return redirect()->route('mystudents');
});
