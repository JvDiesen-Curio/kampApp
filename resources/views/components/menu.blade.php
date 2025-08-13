<div class="bg-gray-800  shadow-lg w-16  h-full flex flex-col justify-evenly rounded-r-md  duration-700 ease-in-out">

    <div class="flex-1 py-2 ">
        <nav>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a href="{{ route('mystudents') }}">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>

                        </div>
                    </div>
                    <div
                        class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                        Mijn groep
                    </div>
                </a>
            </div>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a h href="{{ route('groups.index') }}">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-collection-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                            </svg>

                        </div>
                    </div>

                    <div
                        class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                        Groepen
                    </div>
                </a>
            </div>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a h href="{{ route('students.index') }}">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                        </div>
                    </div>
                </a>

                <div
                    class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                    Studenten
                </div>
            </div>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a h href="{{ route('status.index') }}">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                            </svg>

                        </div>
                    </div>
                </a>

                <div
                    class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                    Status
                </div>
            </div>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a h href="{{ route('medications') }}/?viewWithMedications=true&viewOnlyWihtMedications=true">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hospital" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z" />
                                <path
                                    d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <div
                    class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                    Medicijnen
                </div>
            </div>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a h href="{{ route('qrCodeScanner') }}">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                            </svg>


                        </div>
                    </div>
                </a>

                <div
                    class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                    QR-code scannen
                </div>
            </div>
            <div class="group/menuItem relative ml-4 mb-2 ">
                <a h href="{{ route('importAndExport') }}">
                    <div
                        class="group/link flex justify-between items-center text-white p-1 mr-4 group-hover/menuItem:bg-white group-hover/menuItem:text-gray-800 cursor-pointer
                rounded-xl duration-300 ease-in-out ">
                        <div
                            class="w-6 h-6 flex-none flex justify-center items-center  text-xl/none text-white group-hover/menuItem:text-gray-800 group-[.active]/link:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                            </svg>


                        </div>
                    </div>
                </a>

                <div
                    class="group-hover/menuItem:visible group-hover/menuItem:opacity-100 z-50 invisible opacity-0 text-white  absolute -top-1 -right-2.5 translate-x-full rounded-md p-2 duration-300 ease-in-out truncate bg-gray-800">
                    Import And Export
                </div>
            </div>
        </nav>
    </div>
    <div class="h-16 bg-gray-700 rounded-br-md flex  justify-between items-center text-white ">
        <a href="/amoclient/logout" class="cursor-pointer py-2 px-2 fixed w-16 flex justify-center items-center"> <svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>
    </div>
</div>
