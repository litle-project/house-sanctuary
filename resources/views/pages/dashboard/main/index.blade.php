@extends('layout.dashboard')

@section('content')
<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col gap-5 min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between pt-4 px-6">
                <div class="bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="font-medium">Authors table</h6>
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
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Author</th>
                                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Function</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Employed</th>
                                <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img src="https://picsum.photos/200/300" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 text-sm leading-normal">John Michael</h6>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">john@creative-tim.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 text-xs font-semibold leading-tight">Manager</p>
                                    <p class="mb-0 text-xs leading-tight text-slate-400">Organization</p>
                                </td>
                                <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                </td>
                                <td class="p-2 text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <span class="text-xs font-semibold leading-tight text-slate-400">23/04/18</span>
                                </td>
                                <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a>
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