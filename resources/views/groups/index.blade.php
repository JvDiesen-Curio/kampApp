<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[10%] flex items-center  ">
        <form action="" method="get" class="w-full h-full">
            <input type="text" name="search" id="search" placeholder="Search" value="{{ request('search') }}"
                class="w-full h-full p-2">
        </form>
    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[87%] ">
        <table class="flex flex-col h-full w-full ">
            <thead class=" rounded-tl-lg rounded-tr-lg pt-1 flex-initial ">
                <tr
                    class="border-b-2 border-gray-200 w-full flex justify-evenly py-1 px-2 uppercase text-sm font-bold text-gray-400  ">
                    <th class="w-full text-start">Naam</th>
                    <th class="w-full text-center">Aantal</th>
                </tr>
            </thead>
            <tbody class="overflow-y-scroll flex-1">
                @foreach ($groups as $group)
                    <tr
                        class="flex justify-evenly w-full border-b-2 border-gray-200 pl-2 py-2 hover:bg-gray-200 duration-300 ease-in-out">
                        <td class="w-full truncate"> <a
                                href="{{ route('students.index') . '?groupid=' . $group->id }} ">
                                {{ $group->code }}</a>
                        </td>
                        <td class="w-full truncate text-center"> {{ $group->students->count() }} </td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </section>
</x-layout>
