<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[10%] flex items-center justify-between  ">

        <div>
            <a href="{{ URL::previous() }}">
                <div class="h-8 w-8"><x-icons.goBack /></div>
            </a>
        </div>
        <div class="pl-2 flex  items-center align-middle">
            <div class="font-bold uppercase text-gray-400 text-sm"> Registrant:</div>
            <div class="pl-2 font-bold uppercase ">{{ $presence_log->registrant }} </div>
        </div>
    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1">
        <form method="post" @disabled(true)>
            <div class=" flex justify-center items-center w-full  mb-5  ">
                <div class="h-20 w-20">
                    <x-statusIcons :status="$presence_log->status_id" />
                </div>
            </div>

            <textarea class="border-4 border-gray-800  w-full mt-2" name="note" id="" cols="30" rows="10"
                placeholder="Note" disabled> {{ $presence_log->note }}</textarea>

        </form>
    </section>
</x-layout>
