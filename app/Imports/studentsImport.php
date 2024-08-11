<?php

namespace App\Imports;

use App\Models\groups;
use App\Models\students;
use Carbon\Carbon;
use Exception;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class studentsImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if ($row[0] == null) return null;
        $group_id = 1;

        $parts = explode(" ", $row[8]);

        if (count($parts) >= 1) {
            $group = groups::Where('code', $parts[0])->first();
            if ($group) $group_id = $group->id;
        }

        try {
            $birthdate = Carbon::createFromFormat('d-m-Y', $row[9])->format('Y-m-d');
        } catch (Exception $e) {
            dump($e);
            dd($row[9]);
        }




        return new students([
            'first_name' => $row[6],
            'last_name' => $row[7],
            'birthdate' =>  $birthdate,
            'tel' => $row[10],
            'group_id' =>  $group_id,
            'ec_name' => $row[16],
            'ec_tel' => $row[17],
            'ec_relation' => $row[18],
            'wednesday' => $row[11],
            'wednesday_evening' => $row[13],
            'stay_overnight' => $row[14],
            'thursday_morning' => $row[15],
            'dietary_requirements' => $row[19],
            'note' => $row[20],
            'medicines' => $row[21],
            'allergies' => $row[22],
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
