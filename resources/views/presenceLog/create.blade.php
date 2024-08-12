<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[10%] flex items-center justify-between  ">

        <div>
            <a href="{{ URL::previous() }}">
                <div class="h-8 w-8"><x-icons.goBack /></div>
            </a>
        </div>
    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1">
        <form action="{{ route('presenceLog-store', $student) }}" method="post">
            @csrf
            <div class="grid grid-cols-2">
                <div class="flex flex-col items-center">
                    <input id="status-1" class="peer/status-1 hidden" type="radio" name="status_id" checked
                        value="1" />
                    <label for="status-1"
                        class="h-20 w-20 peer-checked/status-1:border-4 border-gray-800 rounded-full p-1">
                        <x-icons.present />
                    </label>
                    <label for="status-1" class="font-bold uppercase text-gray-500">Aanwezig </label>
                </div>
                <div class="flex flex-col items-center">
                    <input id="status-2" class="peer/status-2 hidden" type="radio" name="status_id" value="2" />
                    <label for="status-2"
                        class="h-20 w-20 peer-checked/status-2:border-4 border-gray-800 rounded-full p-1">
                        <x-icons.absent />
                    </label>
                    <label for="status-2" class="font-bold uppercase text-gray-500">afwezig</label>
                </div>
                <div class="flex flex-col items-center">
                    <input id="status-3" class="peer/status-3 hidden" type="radio" name="status_id" value="3" />
                    <label for="status-3"
                        class="h-20 w-20 peer-checked/status-3:border-4 border-gray-800  p-1 rounded-full">
                        <x-icons.hasGoHome />
                    </label>
                    <label for="status-3" class="font-bold uppercase text-gray-500">naar huis</label>
                </div>
                <div class="flex flex-col items-center">
                    <input id="status-4" class="peer/status-4 hidden" type="radio" name="status_id" value="4" />
                    <label for="status-4"
                        class="h-20 w-20 peer-checked/status-4:border-4 border-gray-800 rounded-full p-1">
                        <x-icons.beRightBack />
                    </label>
                    <label for="status-4" class="font-bold uppercase text-gray-500">Even weg</label>
                </div>

            </div>
            <textarea class="border-4 border-gray-800  w-full mt-2" name="note" id="" cols="30" rows="10"
                placeholder="Note"></textarea>
            <input type="hidden" name="student_id" value="{{ $student->id }}">
            <input type="submit" value="Save" class="bg-gray-800 text-white p-2 rounded-lg w-full  mt-2" />
        </form>
    </section>
</x-layout>
