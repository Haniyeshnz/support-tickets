<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suport Tickets</title>
</head>

<body class="bg-gray-100 h-screen overflow-hidden relatives ">
    <div class="flex item-start justify-start ">
        <!-- Navbar -->
        <div class="h-screen hidden lg:block   relative w-4/12 ">
            <div class="bg-gray-50 h-full rounded-2xl">
                <nav class="pt-6">
                    <div>
                        <a href="{{route('dashboard')}}" class="w-full font-bold text-black flex items-center p-6 my-4 transition-colors duration-200 justify-start  hover:text-gray-500">
                            <span class="text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                            <span class="mx-4 font-bold text-2xl">
                                Dashboard
                            </span>
                        </a>

                        <a href="{{route('ticket.new')}}" class="w-full font-bold text-black  flex items-center  p-6 my-4 transition-colors duration-200 justify-start  hover:text-gray-500">
                            <span class="text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                                </svg>

                            </span>
                            <span class="mx-4 font-bold text-2xl">
                                Tickets
                            </span>
                        </a>
                        <a href="{{route('admin.users')}}" class="w-full font-bold text-black flex items-center  p-6 my-4 transition-colors duration-200 justify-start  hover:text-gray-500">
                            <span class="text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>

                            </span>
                            <span class="mx-4 font-bold text-2xl">
                                Users
                            </span>
                        </a>
                        <a href="#" class="w-full font-bold text-black  flex items-center  p-6 my-4 transition-colors duration-200 justify-start  hover:text-gray-500">
                            <span class="text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>

                            </span>
                            <span class="mx-4 font-bold text-2xl">
                                Ticket Logs
                            </span>
                        </a>
                        <a href="#" class="w-full font-bold text-black  flex items-center  p-6 my-4 transition-colors duration-200 justify-start  hover:text-gray-500">
                            <span class="text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                </svg>

                            </span>
                            <span class="mx-4 font-bold text-2xl">
                                Categories
                            </span>
                        </a>
                        <a href="#" class="w-full font-bold text-black  flex items-center  p-6 my-4 transition-colors duration-200 justify-start  hover:text-gray-500">
                            <span class="text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>

                            </span>
                            <span class="mx-4 font-bold text-2xl">
                                Labels
                            </span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!--  End Navbar -->
        <!--  Main Area-->
        <div class="pl-10 bg-gray-100 w-screen  ">

            @yield('content')
        </div>


        <!-- !End Main Area-->

    </div>

    @vite(['resources/js/main.ts','resources/js/file-upload.ts'])
</body>

</html>