@extends('layouts.nav')

@section ('content')
<!--  Main Area-->

<div class="mr-6">
    <h1 class="mt-10 mb-5 text-5xl font-bold"> Tickets</h1>
    <div class="mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">

        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full  leading-normal ">
                <thead>
                    <tr>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            User
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Title
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Priority
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Category
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Date
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Status
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Assign To
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Last Reply
                        </th>
                        <th scope="col" class="px-3 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Action
                        </th>

                    </tr>
                </thead>
                <!--Start foreach user-->
                <tbody>
                    <tr>
                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        Haniye Shahnavazi
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        for download
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        Low
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        Billing/payments
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        2023/4/2
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        Open
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        agent1
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-5 border-gray-200 bg-white text-sm  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        2 day ago
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-5 py-5 border-gray-200 bg-white text-lg  ">
                            <div class="flex  justify-center items-center   ">
                                <div class="bg-red-500 rounded-lg w-7 h-5 ">
                                    <a href="{{route('dashboard')}}" class=" font-normal text-white flex    transition-colors duration-200 justify-center  hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                    </a>
                                </div>
                                <div class=" bg-sky-500 rounded-lg w-7 h-5 ">
                                    <a href="#" class=" font-normal text-white flex items-center   transition-colors duration-200 justify-start  hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 m-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                </div>
                                <div class=" bg-gray-400 rounded-lg w-7 h-5 ">
                                    <a href="#" class=" font-normal text-white flex items-center   transition-colors duration-200 justify-start  hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 m-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                    </a>
                                </div>


                            </div>
                        </td>

                    </tr>
                </tbody>
                <!--End foreach user-->
            </table>
        </div>
    </div>
</div>




<!-- !End Main Area-->
@endsection