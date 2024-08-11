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
                <th style="width: 5%;">Datum: </th>
                <td style="width: 5%;"></td>
            </tr>
        </table>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Groep</th>
                    <th>Telefoonnummer</th>
                    <th style="width: 5%;">Ronde 1</th>
                    <th style="width: 5%;">Ronde 2</th>
                    <th style="width: 5%;">Ronde 3</th>
                    <th style="width: 5%;">Ronde 4</th>
                    <th style="width: 5%;">Ronde 5</th>
                    <th style="width: 20%;">Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($group->students->sortBy('last_name') as $student)
                    <tr>
                        <td>{{ $student->fullname() }}</td>
                        <td>{{ $student->group->code }}</td>
                        <td>{{ $student->tel }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
