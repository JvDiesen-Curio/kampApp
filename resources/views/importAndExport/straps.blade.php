<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @for ($pageIndex = 0; $pageIndex < $straps->count() / 10; $pageIndex++)
        <div class="page w-full flex justify-center" style="margin-left: {{ $fromleft }}mm;">
            @for ($strapsIndex = $pageIndex * 10; $strapsIndex < ($pageIndex + 1) * 10; $strapsIndex++)
                @if (isset($straps[$strapsIndex]['qrcode_data']))
                    <div class="strap flex justify-center ">
                        <div
                            class=" printable-area-wrapper flex justify-center items-end {{ $straps[$strapsIndex]['curio_bg-color'] }} ">
                            <div class="printable-area flex flex-col items-center">
                                <div class="qrcode-wrapper flex justify-center items-center">
                                    <img class="qrcode bg-white rounded-md"
                                        src="https://api.qrserver.com/v1/create-qr-code/?data= {{ $straps[$strapsIndex]['qrcode_data'] }}" />
                                </div>
                                <div
                                    class="flex-1
                                    flex justify-evenly items-center flex-col">
                                    <div class="font-extrabold text-white  uppercase   [writing-mode:vertical-lr]">
                                        {{ $straps[$strapsIndex]['group_code'] }}
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="font-extrabold text-white text-sm [writing-mode:vertical-lr] flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-3 rotate-90">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="mt-1"> {{ $straps[$strapsIndex]['mentor_mobiele'] }} </div>
                                        </div>
                                        <div class="font-extrabold text-white text-sm [writing-mode:vertical-lr] ">
                                            {{ $straps[$strapsIndex]['mentor_name'] }}</div>

                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="font-extrabold text-white text-sm [writing-mode:vertical-lr] flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-3 rotate-90">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="mt-1"> {{ $straps[$strapsIndex]['emergency_number'] }} </div>
                                        </div>
                                        <div
                                            class="font-extrabold text-white text-sm [writing-mode:vertical-lr] uppercase ">
                                            noodnummer</div>
                                    </div>
                                </div>
                                <img class="logo" src="{{ $straps[$strapsIndex]['curio_logo'] }}" alt="">
                            </div>
                        </div>
                    </div>
                @else
                    <div class="strap ">
                    </div>
                @endif
            @endfor
        </div>
    @endfor
</body>

</html>
<style>
    html {
        margin: 0px
    }

    @page {
        margin: 0px;
    }

    body {
        margin: 0px;
    }

    .strap {
        width: 19mm;
        height: 255mm;
    }

    .printable-area-wrapper {
        width: 17mm;
        margin-top: 5mm;
        margin-left: 1mm;
        margin-right: 1mm;

    }

    .printable-area {
        width: 15mm;
        height: 207mm;
        margin-bottom: -15mm;
    }

    .logo {
        padding-bottom: 30mm;
        width: 15mm;
    }

    .qrcode-wrapper {
        padding-top: 10px;
        width: 15mm;
    }

    .qrcode {
        width: 15mm;
        padding: 3px;
        background-color: white;
    }

    .page {
        page-break-after: always;
        height: 255mm;

    }
</style>
