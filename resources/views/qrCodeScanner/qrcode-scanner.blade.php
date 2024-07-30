@props(['returnurl' => null, 'status' => true, 'statusid' => 1])

<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[12%] flex items-center  ">
        <form id="form" class="w-full h-full flex items-center justify-center">
            @if ($status)
                <div class="grid grid-cols-3 w-full">
                    <div class="flex flex-col items-center">
                        <input id="status-1" class="peer/status-1 hidden checkbox " type="radio" name="statusid"
                            {{ $statusid == 1 ? 'checked' : '' }} value="1" />
                        <label for="status-1"
                            class="h-12 w-12 peer-checked/status-1:border-4 border-gray-800 rounded-full p-1">
                            <x-icons.present />
                        </label>
                        <label for="status-1" class="font-bold uppercase text-gray-500 text-xs">Aanwezig </label>

                    </div>
                    {{-- <div class="flex flex-col items-center">
                        <input id="status-2" class="peer/status-2 hidden checkbox" type="radio" name="statusid"
                            {{ $statusid == 2 ? 'checked' : '' }} value="2" />
                        <label for="status-2"
                            class="h-12 w-12 peer-checked/status-2:border-4 border-gray-800 rounded-full p-1">
                            <x-icons.absent />
                        </label>
                        <label for="status-2" class="font-bold uppercase text-gray-500 text-xs"">afwezig</label>
                    </div> --}}
                    <div class="flex flex-col items-center">
                        <input id="status-3" class="peer/status-3 hidden checkbox" type="radio" name="statusid"
                            {{ $statusid == 3 ? 'checked' : '' }} value="3" />
                        <label for="status-3"
                            class="h-12 w-12 peer-checked/status-3:border-4 border-gray-800  p-1 rounded-full">
                            <x-icons.hasGoHome />
                        </label>
                        <label for="status-3" class="font-bold uppercase text-gray-500 text-xs"> naar huis</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input id="status-4" class="peer/status-4 hidden checkbox" type="radio" name="statusid"
                            {{ $statusid == 4 ? 'checked' : '' }} value="4" />
                        <label for="status-4"
                            class="h-12 w-12 peer-checked/status-4:border-4 border-gray-800 rounded-full p-1">
                            <x-icons.beRightBack />
                        </label>
                        <label for="status-4" class="font-bold uppercase text-gray-500 text-xs">even weg</label>
                    </div>

                </div>
            @endif
            <input type="hidden" name="calbackurl" id="calbackurl" value="{{ $calbackurl }}">
            <input type="hidden" name="returnurl" id="returnurl" value="{{ $returnurl }}">
        </form>


    </section>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex-1 h-[85%]  flex justify-center items-center overflow-hidden">
        @vite(['resources/js/qr-code-scanner.js'])
        <div class="wrap">
            <video style="max-width: none" id="qr-video"></video>
        </div>
    </section>
</x-layout>

<style>
    .wrap {
        height: 100%;
        overflow: hidden;
    }

    video {
        position: absolute;
        top: -100%;
        bottom: -100%;
        left: -200%;
        right: -200%;
        margin: auto;
        min-width: 50%;
        min-height: 50%;
    }
</style>
