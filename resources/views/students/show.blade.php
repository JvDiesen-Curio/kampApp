<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[10%] flex items-center justify-between">
        <div>
            <a href="{{ route('students.index') }}">
                <div class="h-10 w-10"><x-icons.goBack /></div>
            </a>
        </div>
        <div>
            @if (!$student->qr_code)
                <a href="{{ route('qrCodeScannerInchecken', $student) }}?returnurl={{ route('students.show', $student) }}"
                    class="h-10 w-10 flex items-center pl-2  text-gray-500">
                    <x-icons.qrcode />
                </a>
            @endif
        </div>
        <div class="flex justify-end items-center pr-2">
            <a href="{{ route('presenceLog-create', $student) }}" Class="flex items-center ">
                <div class="font-bold uppercase text-gray-400 text-sm pr-2"> Status:</div>
                <div class="h-10 w-10">
                    @if ($student->getLatestStatus())
                        <a href="{{ route('presenceLog-create', $student) }}" class="">
                            <x-statusIcons :status="$student->getLatestStatus()->status_id" />
                        </a>
                    @else
                        <x-statusIcons :status="null" />
                    @endif
                </div>
            </a>
        </div>

    </section>
    <div class=" h-[87%] overflow-y-auto">
        <section
            class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1  ">
            <div class="pl-2 font-bold uppercase text-gray-500">Info student</div>
            <hr />
            <div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Voornaam:</div>
                    <div class="pl-2 font-bold ">{{ $student->first_name }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Achternaam:</div>
                    <div class="pl-2 font-bold ">{{ $student->last_name }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Geboortedatum:</div>
                    <div class="pl-2 font-bold ">{{ $student->birthdate }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Telefoonnummer:</div>
                    <a href="tel:{{ $student->tel }}">
                        <div class="pl-2 font-bold ">{{ $student->tel }} </div>
                    </a>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Groep code:</div>
                    <div class="pl-2 font-bold ">{{ $student->group->code }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Mentor:</div>
                    <div class="pl-2 font-bold ">{{ $student->group->mentor->name }} </div>
                </div>
            </div>
        </section>
        <section
            class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1">
            <div class="pl-2 font-bold uppercase text-gray-500">Nood-contact</div>
            <hr />
            <div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Naam:</div>
                    <div class="pl-2 font-bold ">{{ $student->ec_name }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Telefoonnummer:</div>
                    <a href="tel:{{ $student->ec_tel }}">
                        <div class="pl-2 font-bold ">{{ $student->ec_tel }} </div>
                    </a>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Relatie :</div>
                    <div class="pl-2 font-bold ">{{ $student->ec_relation }} </div>
                </div>
            </div>
        </section>

        <section
            class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1">
            <div class="pl-2 font-bold uppercase text-gray-500">Medische informatie</div>
            <hr />
            <div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> Dieetwensen:</div>
                    <div class="pl-2 font-bold ">{{ $student->dietary_requirements }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> medicijnen:</div>
                    <div class="pl-2 font-bold ">{{ $student->medicines }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> allergieën:</div>
                    <div class="pl-2 font-bold ">{{ $student->allergies }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> note :</div>
                    <div class="pl-2 font-bold ">{{ $student->note }} </div>
                </div>
            </div>
        </section>
        <section
            class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1">
            <div class="pl-2 font-bold uppercase text-gray-500">logboek</div>
            <hr />
            <div>
                <table class="flex flex-col h-full w-full ">
                    <thead class=" rounded-tl-lg rounded-tr-lg pt-1 flex-initial ">
                        <tr
                            class="border-b-2 border-gray-200 w-full flex justify-evenly py-1 px-2 uppercase text-sm font-bold text-gray-400  ">

                            <th class="w-full text-start">Tijdstip</th>
                            <th class="text-center w-1/3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="overflow-y-scroll flex-1">
                        @foreach ($student->presence_logs->sortByDesc('created_at') as $log)
                            <tr
                                class="flex justify-evenly w-full border-b-2 border-gray-200 pl-2 py-2 hover:bg-gray-200 duration-300 ease-in-out">

                                <td class="w-full flex items-center">
                                    <div class="test-sm ">{{ $log->created_at }}</div>
                                </td>
                                <td class="flex justify-center w-1/3">
                                    <a href="{{ route('presenceLog-show', $log) }}">
                                        <div class="h-8 w-8 ">
                                            <x-statusIcons :status="$log->status_id" />
                                        </div>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </section>
        <section
            class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1">
            <div class="pl-2 font-bold uppercase text-gray-500">voorkeur aanwezigheid</div>
            <hr />
            <div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> woensdag:</div>
                    <div class="pl-2 font-bold ">{{ $student->wednesday }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> woensdagavond:</div>
                    <div class="pl-2 font-bold ">{{ $student->wednesday_evening }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm"> blijven slapen :</div>
                    <div class="pl-2 font-bold ">{{ $student->stay_overnight }} </div>
                </div>
                <div class="pl-2 flex  items-center align-middle">
                    <div class="font-bold uppercase text-gray-400 text-sm">
                        donderdagochtend :</div>
                    <div class="pl-2 font-bold ">{{ $student->thursday_morning }} </div>
                </div>

            </div>
        </section>
    </div>
</x-layout>
