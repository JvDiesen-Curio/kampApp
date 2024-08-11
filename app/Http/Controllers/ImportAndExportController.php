<?php

namespace App\Http\Controllers;

use App\Imports\studentsImport;
use App\Models\groups;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportAndExportController extends Controller
{

    public function importAndExport()
    {

        return view('importAndExport.importAndExport', ['groups' => groups::all()]);
    }

    public function import()
    {

        $data = request()->validate([
            'file' => ['required', 'file'],
        ]);

        Excel::import(new studentsImport, $data['file']);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }

    public function exportStraps()
    {
        $data = request()->validate([
            "emergency_number" => 'required',
        ]);


        $straps = collect([]);


        foreach (groups::all() as $group) {
            if (!request()->input($group->code)) continue;
            for ($i = 0; $i < request()->input($group->code); $i++) {


                $straps->push([
                    'qrcode_data' =>   env('APP_URL') . '?qrcode=' . fake()->regexify('[A-Za-z0-9]{8}'),
                    'group_code' => $group->code,
                    'mentor_name' => $group->mentor->name,
                    'mentor_mobiele' => $group->mentor->mobiele,
                    'emergency_number' => $data['emergency_number'],
                    'curio_logo' =>   $this->getCurioLogo($group->thema_id),
                    'curio_bg-color' => $this->getCurioBgColor($group->thema_id),
                ]);
            }
        }

        $rest = $straps->count() % 10;
        if ($rest > 0) {
            for ($i = 0; $i < 10 - $rest; $i++) {
                $straps->push([]);
            }
        }

        return view('importAndExport.straps', ['straps' => $straps]);
    }

    private function  getCurioLogo($thame_id): string
    {
        if ($thame_id == 1) return asset('/storage/curio-logos-R90\curio-15-licht-groen-logo-rgb.png');
        if ($thame_id == 2) return asset('/storage/curio-logos-R90\curio-12-licht-blauw-logo-rgb.png');
        if ($thame_id == 3) return asset('/storage/curio-logos-R90\curio-11-donker-paars-logo-rgb.png');
        if ($thame_id == 4) return asset('/storage/curio-logos-R90\curio-03-geel-logo-rgb.png');
        if ($thame_id == 5) return asset('/storage/curio-logos-R90\curio-12-licht-blauw-logo-rgb.png');
        if ($thame_id == 6) return asset('/storage/curio-logos-R90\curio-03-geel-logo-rgb.png');
        if ($thame_id == 7) return asset('/storage/curio-logos-R90\curio-03-geel-logo-rgb.png');

        return asset('/storage/curio-logos-R90\curio-15-licht-groen-logo-rgb.png');
    }
    private function  getCurioBgColor($thame_id): string
    {
        if ($thame_id == 1) return 'bg-curio-donker-blauw';
        if ($thame_id == 2) return 'bg-curio-bruin';
        if ($thame_id == 3) return 'bg-curio-geel';
        if ($thame_id == 4) return 'bg-curio-donker-groen';
        if ($thame_id == 5) return 'bg-curio-donker-paars';
        if ($thame_id == 6) return 'bg-curio-rood';
        if ($thame_id == 7) return 'bg-curio-donker-roze';

        return 'bg-curio-donker-blauw';
    }
}
