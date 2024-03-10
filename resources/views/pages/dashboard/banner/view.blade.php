@extends('layout.dashboard')

@section('content')
<div class="flex justify-between items-center">
    @include('components.dashboard.breadcrumb')
    <!-- <button class="px-4 py-1.5 text-xs text-white rounded-xl bg-pink-600">Add New</button> -->
</div>
<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col gap-5 min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between pt-4 px-6">
                <div class="bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="font-medium">Banner</h6>
                </div>
                <div class="flex items-center md:ml-auto">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                        <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                    </div>
                </div>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Image</th>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Page</th>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <img src="https://picsum.photos/200/300" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 text-xs font-semibold leading-tight">Manager</p>
                                    <p class="mb-0 text-xs leading-tight text-slate-400">Organization</p>
                                </td>
                                <td class="align-middle p-2">
                                    <a href="javascript:;" class="text-xs font-semibold leading-tight p-1 text-green-400">Edit</a>
                                    <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight p-1 text-red-400">Delete</a> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection