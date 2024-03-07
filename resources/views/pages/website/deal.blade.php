@extends('layout.website')

@section('content')
<main>
    <div class="bg-blue-100 bg-center bg-cover bg-no-repeat w-full h-[600px]" style="background-image: url('assets/images/deal.jpeg');">
        <div class="flex flex-col gap-10 items-center py-48">
            <div class="text-white fredoka text-center text-5xl">
                steals & deals
            </div>
            <div class="flex gap-3 bg-white p-4 w-2/5 rounded-xl">
                <input type="text" class="w-full px-5 rounded-md outline-none" placeholder="type in title, location, or hotel name?">
                <select class="outline-none border border-pink-900 fedroka text-sm rounded-md py-2 px-4 font-medium">
                    <option>All categories</option>
                </select>
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
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/travel-1.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Indulge in a Blissful Getaway Without Going Far!</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl4">
                <img src="assets/images/travel-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Flight for less with Garuda Indonesia! Enjoy up to 10% off at our selected hotels until November 21, 2024.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/travel-3.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/vacation-1.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/vacation-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/vacation-3.avif" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/hotel-1.webp" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/hotel-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-xl flex flex-col max-w-[22rem] max-h-[500px] shadow-xl">
                <img src="assets/images/hotel-3.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-t-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-400 line-clamp-3 h-[4.5rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro reiciendis ullam esse ipsa saepe inventore harum ut iusto quaerat. Blanditiis in eaque maiores expedita fugiat, quasi illum provident ipsum.</span>
                    <button type="button" class="fedroka w-fit rounded-md bg-pink-900 py-2 px-5 text-white text-sm mt-5">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection