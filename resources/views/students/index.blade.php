<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1  flex items-center  "
        style=" height: {{ request('statusid') || request('status') == 'true' ? '20%' : '10%' }};">
        @if (request('statusid') || request('status') == 'true')
            <form action="" method="get" id="auto-submit-form"
                class="w-full h-full flex items-center justify-center flex-wrap">
                <div class="grid grid-cols-4 w-full">
                    <div class="flex flex-col items-center">
                        <input id="status-1" class="peer/status-1 hidden" type="radio" name="statusid"
                            {{ request('statusid') == 1 ? 'checked' : '' }} value="1" />
                        <label for="status-1"
                            class="h-12 w-12 peer-checked/status-1:border-4 border-gray-800 rounded-full p-1">
                            <x-icons.present />
                        </label>
                        <label for="status-1" class="font-bold uppercase text-gray-500 text-xs text-center">Aanwezig
                        </label>
                    </div>
                    {{-- <div class="flex flex-col items-center">
                        <input id="status-2" class="peer/status-2 hidden" type="radio" name="statusid"
                            {{ request('statusid') == 2 ? 'checked' : '' }} value="2" />
                        <label for="status-2"
                            class="h-12 w-12 peer-checked/status-2:border-4 border-gray-800 rounded-full p-1">
                            <x-icons.absent />
                        </label>
                        <label for="status-2"
                            class="font-bold uppercase text-gray-500 text-xs text-center">afwezig</label>

                    </div> --}}
                    <div class="flex flex-col items-center">
                        <input id="status-3" class="peer/status-3 hidden" type="radio" name="statusid"
                            {{ request('statusid') == 3 ? 'checked' : '' }} value="3" />
                        <label for="status-3"
                            class="h-12 w-12 peer-checked/status-3:border-4 border-gray-800  p-1 rounded-full">
                            <x-icons.hasGoHome />
                        </label>
                        <label for="status-3" class="font-bold uppercase text-gray-500 text-xs text-center">naar
                            huis</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input id="status-4" class="peer/status-4 hidden" type="radio" name="statusid"
                            {{ request('statusid') == 4 ? 'checked' : '' }} value="4" />
                        <label for="status-4"
                            class="h-12 w-12 peer-checked/status-4:border-4 border-gray-800 rounded-full p-1">
                            <x-icons.beRightBack />
                        </label>
                        <label for="status-4" class="font-bold uppercase text-gray-500 text-xs text-center">even
                            weg</label>
                    </div>

                    <div class="flex flex-col items-center">
                        <input id="status-inchecken" class="peer/status-inchecken hidden" type="radio" name="statusid"
                            {{ request('statusid') == 'inchecken' ? 'checked' : '' }} value="inchecken" />
                        <label for="status-inchecken"
                            class="h-12 w-12 peer-checked/status-inchecken:border-4 border-gray-800 text-gray-500  p-1">
                            <x-icons.qrcode />
                        </label>
                        <label for="status-inchecken"
                            class="font-bold uppercase text-gray-500 text-xs text-center">Inchecken</label>

                    </div>

                </div>
                <div class=" flex mt-1">
                    <div class="flex flex-col items-center">
                        <label for="recanMinutes" class="font-bold uppercase text-gray-500 text-xs w-full">recan
                            Minutes
                        </label>
                        <input type="number" value="{{ request('recanMinutes') ? request('recanMinutes') : 120 }}"
                            name="recanMinutes" id="recanMinutes" class="w-full">

                    </div>
                    <div class="flex flex-col items-center">
                        <input id="status-5" class="peer/status-4 hidden" type="radio" name="statusid"
                            {{ request('statusid') == 5 ? 'checked' : '' }} value="5" />
                        <label for="status-5"
                            class="h-10 w-10 peer-checked/status-4:border-4 border-gray-800 p-1 text-orange-500">
                            <x-icons.qrcode />
                        </label>

                    </div>
                </div>

            </form>
        @else
            <form action="" method="get" class="w-full h-full flex items-center">
                <input type="text" name="search" id="search" placeholder="Search" value="{{ request('search') }}"
                    class="w-full h-full p-2">
                <a href="{{ route('qrCodeScanner') . '?onlyScanner=true&calbackurl=' . URL::full() }}">
                    <div class="text-gray-800 w-10 h-10 ">
                        <x-icons.qrcode />
                    </div>
                </a>
            </form>
        @endif

    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1"
        style=" height: {{ request('statusid') || request('status') == 'true' ? '77%' : '87%' }};">
        <table class="flex flex-col h-full w-full ">
            <thead class=" rounded-tl-lg rounded-tr-lg pt-1 flex-initial ">
                <tr
                    class="border-b-2 border-gray-200 w-full flex justify-evenly py-1 px-2 uppercase text-sm font-bold text-gray-400  ">
                    <th class="w-full text-start">Naam</th>
                    {{-- <th class="w-full text-start">Groep</th> --}}
                    <th class="w-full text-center">Status</th>
                </tr>
            </thead>
            <tbody class="overflow-y-scroll flex-1">
                @foreach ($students as $student)
                    <tr
                        class="flex justify-evenly w-full border-b-2 border-gray-200 pl-2 py-2 hover:bg-gray-200 duration-300 ease-in-out">
                        <td class="w-full truncate"> <a
                                href="{{ route('students.show', $student) }}">{{ $student->fullname() }}</a></td>
                        {{-- <td class="w-full truncate">{{ $student->group->code }}</td> --}}
                        <td class="w-full flex items-center justify-center">
                            <div class="h-8 w-8  ">
                                @if ($student->getLatestStatus())
                                    <a href="{{ route('presenceLog-create', $student) }}">
                                        <x-statusIcons :status="$student->getLatestStatus()->status_id" />
                                    </a>
                                @else
                                    @if (!$student->qr_code)
                                        <a
                                            href="{{ route('qrCodeScannerInchecken', $student) . '?onlyScanner=true&returnurl=' . URL::full() }}">
                                            <div class="text-gray-500">
                                                <x-icons.qrcode />
                                            </div>
                                        </a>
                                    @else
                                        <a href="{{ route('presenceLog-create', $student) }}">
                                            <x-statusIcons :status="null" />
                                        </a>
                                    @endif
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </section>
</x-layout>


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const form = document.getElementById('auto-submit-form')
        form.addEventListener('change', function() {
            form.submit();
        })
    });
</script>
