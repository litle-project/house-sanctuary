@extends('layout.website')

@section('content')
<main>
    <div class="bg-blue-100 bg-center bg-cover bg-no-repeat w-full h-[500px]" style="background-image: url('assets/images/coconut.jpeg');">
        <div class="flex flex-col gap-10 items-center py-48">
            <div class="text-white fredoka text-center text-5xl">
                happenings
            </div>
            <div class="flex gap-3 bg-white p-4 w-2/5 rounded-xl">
                <input type="text" class="w-full px-5 rounded-md outline-none" placeholder="type in title, location, or hotel name?">
                <button class="py-2 px-8 font-medium bg-pink-900 text-white rounded-md">Search</button>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-10 bg-white px-64 py-10">
        <div class="flex justify-between items-end text-white fredoka pr-10">
            <span class="text-4xl tracking-wider">special for you</span>
            <div class="cursor-pointer flex gap-2 text-sm">
                <span class="hover:underline">view more details</span>
                <span>&#10095;</span>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/travel-1.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/travel-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/travel-3.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/vacation-1.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/vacation-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/vacation-3.avif" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/hotel-1.webp" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/hotel-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/hotel-3.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col px-4 py-3">
                    <div class="flex flex-col gap-4">
                        <span class="text-sm text-gray-500">lorem ipsum</span>
                        <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                        <span class="text-gray-400 line-clamp-3 h-[4.5rem]">14 Feb 2024</span>
                    </div>
                    <button type="button" class="fedroka w-fit rounded-md bg-transparent py-2 text-pink-900">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection