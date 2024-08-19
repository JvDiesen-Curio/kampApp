<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex justify-center flex-col ">

        <h1 class=" font-extrabold uppercase text-gray-500 w-full text-center">Import Students Excel File</h1>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required class="w-full">
            <button type="submit"
                class="bg-gray-800 text-white p-2 rounded-lg w-full uppercase  mt-2 font-extrabold">Import</button>
        </form>

    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex justify-center flex-col ">

        <h1 class=" font-extrabold uppercase text-gray-500 w-full text-center">Generate straps</h1>

        <form action="{{ route('straps') }}" method="GET">
            @foreach ($groups as $group)
                <div class="w-full flex my-1 ">
                    <label class="w-[90%]" for="{{ $group->code }}">{{ $group->code }}:</label>
                    <input class="w-[10%] text-center " id="{{ $group->code }}" type="number"
                        name="{{ $group->code }}" value="{{ $group->students->count() }}">

                </div>
                <hr>
            @endforeach
            <div class="w-full flex ">
                <label class="w-[50%]" for="emergency_number">Emergency number:</label>
                <input class="w-[50%] text-center " id="emergency_number" type="tel" name="emergency_number"
                    value="+31 88 209 7527">
            </div>
            <div class="w-full flex  bg-red-400">
                <label class="w-[90%]" for="fromleft">Zet het gecentreerd ten opzichte van de linkerzijde, uitgedrukt in
                    millimeters:</label>
                <input class="w-[10%] text-center " id="fromleft" type="nummer" name="fromleft" value="-6">
            </div>
            <button type="submit"
                class="bg-gray-800 text-white p-2 rounded-lg w-full uppercase  mt-2 font-extrabold">Generate</button>
        </form>

    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex justify-center flex-col ">

        <h1 class=" font-extrabold uppercase text-gray-500 w-full text-center ">Export Students backup
            File</h1>

        <div class="w-full flex">
            <a href="{{ route('backupRegistratie') }}"
                class="bg-gray-800 text-white p-2 rounded-lg w-full mx-2 uppercase mt-2 text-center font-extrabold">Backup
                registratie files </a>
            <a href="{{ route('backupStudentsInfo') }}"
                class="bg-gray-800 text-white p-2 rounded-lg w-full  mx-2 uppercase mt-2 text-center font-extrabold">Backup
                students info files </a>

        </div>
    </section>

</x-layout>
