@extends('layout.website')

@section('content')
<main class="px-64">
    <div class="flex flex-col gap-20 py-24">
        <img src="assets/images/meeting.jpeg" class="w-full h-96 object-cover rounded-xl shadow-md">
        <div class="grid grid-cols-9 grid-flow-row gap-5">
            <span class="bg-pink-900 rounded-full text-white text-center py-3">Jakarta</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Bekasi</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Semarang</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Solo</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Surabaya</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Lombok</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Sumbawa</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Papua</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Aceh</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap col-span-2">Sulawesi Utara</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap col-span-2">Sulawesi Barat</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap col-span-2">Sulawesi Timur</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Malang</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Situbondo</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Banyuwangi</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap col-span-2">Sulawesi Selatan</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap">Bali</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap col-span-2">Kalimantan Barat</span>
            <span class="bg-lime-200 rounded-full text-pink-900/50 text-center py-3 px-5 w-full whitespace-nowrap col-span-2">Kalimantan Timur</span>
        </div>
        <div class="grid grid-cols-3 gap-8">
            <div class="rounded-xl drop-shadow bg-white h-fit min-h-72">
                <img src="assets/images/hotel-1.webp" class="w-full h-64 object-cover rounded-t-md">
                <div class="description fedroka px-5 py-5 flex flex-col gap-5">
                    <div class="text-sm text-center font-medium text-gray-500">sanctuary lorem villa ipsum</div>
                    <div class="flex justify-around text-xs">
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Whatsapp</button>
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Contact Us</button>
                    </div>
                    <div class="text-center text-pink-900 hover:underline font-medium">
                        view details
                    </div>
                </div>
            </div>
            <div class="rounded-xl drop-shadow bg-white h-fit min-h-72">
                <img src="assets/images/hotel-2.jpeg" class="w-full h-64 object-cover rounded-t-md">
                <div class="description fedroka px-5 py-5 flex flex-col gap-5">
                    <div class="text-sm text-center font-medium text-gray-500">sanctuary lorem villa ipsum</div>
                    <div class="flex justify-around text-xs">
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Whatsapp</button>
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Contact Us</button>
                    </div>
                    <div class="text-center text-pink-900 hover:underline font-medium">
                        view details
                    </div>
                </div>
            </div>
            <div class="rounded-xl drop-shadow bg-white h-fit min-h-72">
                <img src="assets/images/hotel-3.jpeg" class="w-full h-64 object-cover rounded-t-md">
                <div class="description fedroka px-5 py-5 flex flex-col gap-5">
                    <div class="text-sm text-center font-medium text-gray-500">sanctuary lorem villa ipsum</div>
                    <div class="flex justify-around text-xs">
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Whatsapp</button>
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Contact Us</button>
                    </div>
                    <div class="text-center text-pink-900 hover:underline font-medium">
                        view details
                    </div>
                </div>
            </div>
            <div class="rounded-xl drop-shadow bg-white h-fit min-h-72">
                <img src="assets/images/travel-1.jpeg" class="w-full h-64 object-cover rounded-t-md">
                <div class="description fedroka px-5 py-5 flex flex-col gap-5">
                    <div class="text-sm text-center font-medium text-gray-500">sanctuary lorem villa ipsum</div>
                    <div class="flex justify-around text-xs">
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Whatsapp</button>
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Contact Us</button>
                    </div>
                    <div class="text-center text-pink-900 hover:underline font-medium">
                        view details
                    </div>
                </div>
            </div>
            <div class="rounded-xl drop-shadow bg-white h-fit min-h-72">
                <img src="assets/images/travel-2.jpeg" class="w-full h-64 object-cover rounded-t-md">
                <div class="description fedroka px-5 py-5 flex flex-col gap-5">
                    <div class="text-sm text-center font-medium text-gray-500">sanctuary lorem villa ipsum</div>
                    <div class="flex justify-around text-xs">
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Whatsapp</button>
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Contact Us</button>
                    </div>
                    <div class="text-center text-pink-900 hover:underline font-medium">
                        view details
                    </div>
                </div>
            </div>
            <div class="rounded-xl drop-shadow bg-white h-fit min-h-72">
                <img src="assets/images/travel-3.jpeg" class="w-full h-64 object-cover rounded-t-md">
                <div class="description fedroka px-5 py-5 flex flex-col gap-5">
                    <div class="text-sm text-center font-medium text-gray-500">sanctuary lorem villa ipsum</div>
                    <div class="flex justify-around text-xs">
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Whatsapp</button>
                        <button class="text-white bg-pink-900 hover:text-pink-900 hover:bg-white hover:border hover:border-pink-900 px-6 py-3 rounded-full">Contact Us</button>
                    </div>
                    <div class="text-center text-pink-900 hover:underline font-medium">
                        view details
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection