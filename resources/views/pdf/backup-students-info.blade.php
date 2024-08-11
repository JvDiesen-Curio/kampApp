<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @foreach ($groups as $group)
        <table>
            <tr>
                <th style="width: 5%;">Groep: </th>
                <td style="width: 5%;"> {{ $group->code }}</td>
                <th style="width: 5%;">Mentor: </th>
                <td style="width: 5%;"> {{ $group->mentor->name }}</td>
                <th style="width: 5%;">Aantal: </th>
                <td style="width: 5%;"> {{ $group->students->count() }}</td>

            </tr>
        </table>
        <hr>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">Naam</th>
                    <th>Telefoonnummer</th>
                    <th>Noodcontactpersoon</th>
                    <th>Dieetwensen</th>
                    <th rowspan="2">Medicijnen</th>
                    <th rowspan="2">Rekening mee houden</th>
                </tr>
                <tr>
                    <th>Geboortedatum</th>
                    <th>Telefoonnummer noodcontactpersoon</th>
                    <th>Allergieën</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($group->students->sortBy('last_name') as $student)
                    <tr>
                        <td rowspan="2">{{ $student->fullname() }}</td>
                        <td>{{ $student->tel }}</td>
                        <td>{{ $student->ec_name }} ({{ $student->ec_relation }})</td>
                        <td>{{ $student->dietary_requirements }}</td>
                        <td rowspan="2">{{ $student->medicines }}</td>
                        <td rowspan="2">{{ $student->note }}</td>
                    </tr>
                    <tr>
                        <td>{{ $student->birthdate }}</td>
                        <td>{{ $student->ec_tel }}</td>
                        <td>{{ $student->allergies }}</td>
                    </tr>
                @endforeach

            </tbody>


        </table>
        @if (!$loop->last)
            <div class="page-break"></div>
        @endif
    @endforeach


</body>

</html>

<style>
    .page-break {
        page-break-after: always;
    }

    table {
        width: 100%
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        height: 50px;

    }

    th {
        width: 10%;
        text-align: "start";
        background-color: rgb(229 231 235)
    }

    /* html {
margin: 0px
}

@page {
margin: 0px;
}

body {
margin: 0px;
} */
</style>
