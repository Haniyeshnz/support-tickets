@extends('layouts.nav')

@section ('content')
<!--  Main Area-->

<div class="mr-10">
    <h1 class="my-10 text-5xl font-bold">Users</h1>
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
            </table>
        </div>
    </div>
</div>




<!-- !End Main Area-->
@endsection