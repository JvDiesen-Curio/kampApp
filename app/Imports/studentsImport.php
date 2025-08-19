<?php

namespace App\Imports;

use App\Models\Groups;
use App\Models\Students;
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

    // .csv import klommen volgens de kolomme: Klas ,Voornaam,	Achternaam,	Geboortedatum, Telefoonnummer, aanwezighied, Voor- en achternaam noodcontactpersoon, Telefoonnummer, noodcontactpersoon	Relatie met noodcontactpersoon,	Dieetwensen,medicijnen,	allergieën




    public function model(array $row)
    {
        if ($row[0] == null) return null;
        $group_id = 1;

        $parts = explode(" ", $row[0]); // groep code

        if (count($parts) >= 1) {
            $group = Groups::Where('code', $parts[0])->first();
            if ($group) $group_id = $group->id;
        }

        try {
            $birthdate = Carbon::createFromFormat('d-m-Y', $row[3])->format('Y-m-d'); // Geboortedatum
        } catch (Exception $e) {
            dump($e);
            dump($row[3]);
            dd($row);
        }




        return new students([
            'first_name' => $row[1], // voornaam
            'last_name' => $row[2], // achternaam
            'birthdate' =>  $birthdate, // geboortedatum
            'tel' => $row[4], // telefoonnummer
            'group_id' =>  $group_id, // groep
            'ec_name' => $row[6], // naam van de verantwoordelijke
            'ec_tel' => $row[7], // telefoonnummer
            'ec_relation' => $row[8],   // relatie
            'dietary_requirements' => $row[9],  // dieet
            'note' => $row[10],     // opmerking
            'medicines' => $row[11], // medicijnen
            'allergies' => $row[12],  // allergie
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
