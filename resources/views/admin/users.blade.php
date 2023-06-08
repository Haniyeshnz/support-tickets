@extends('layouts.nav')

@section ('content')
<!--  Main Area-->

<div class="mr-10">
    <h1 class="mt-10 mb-5 text-5xl font-bold">Users</h1>
    <div class="mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">

        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full  laeding-normal ">
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Name
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Role
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            All Tickets
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Open Tickets
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-black text-sm font-normal">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-5 py-5 border-gray-200 bg-white text-lg  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap "> Haniye Shahnavazi</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-gray-200 bg-white text-lg  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        admin
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-gray-200 bg-white text-lg  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        3
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-gray-200 bg-white text-lg  ">
                            <div class="flex items-center">
                                <div class="mx-auto">
                                    <p class="text-gray-900 whitespace-nowrap ">
                                        2
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-gray-200 bg-white text-lg  ">
                            <div class="flex  justify-center items-center   ">
                                <div class="ml-3 bg-red-500 rounded-lg w-8 h-6">
                                    <a href="{{route('dashboard')}}" class=" font-normal text-white flex    transition-colors duration-200 justify-center  hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                    </a>
                                </div>
                                <div class="ml-3 bg-sky-500 rounded-lg w-8 h-6 ">
                                    <a href="{{route('dashboard')}}" class=" font-normal text-white flex items-center   transition-colors duration-200 justify-start  hover:text-gray-500">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-6 m-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>


                                    </a>
                                </div>


                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- !End Main Area-->
@endsection