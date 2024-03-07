@extends('layout.website')

@section('content')
<main>
    <div class="bg-blue-100 object-cover bg-fixed" style="background-image: url('assets/images/bg-1.webp');">
        <div class="flex flex-col gap-10 items-center py-72">
            <div class="text-white fredoka text-center text-5xl">
                fun, friendly, free-spirited
            </div>
            <div class="relative w-2/5">
                <input type="text" class="w-full py-4 px-5 rounded-md outline-none" placeholder="Where do you want to go?">
                <img src="assets/images/magnifier.svg" class="w-8 h-8 absolute top-3 right-5" />
            </div>
        </div>
    </div>
    <div class="relative">
        <div class="flex flex-col gap-20 py-24 mb-96">
            <div class="flex gap-10 items-center px-64">
                <img src="assets/images/hotel-1.webp" class="w-1/2 h-72 object-cover">
                <div class="content flex flex-col gap-5 fredoka">
                    <span class="text-pink-900 text-4xl tracking-wider">let fun begin</span>
                    <span class="leading-relaxed text-md">where simplicity and smiles go hand in hand! with affordable rooms and a playful spirit, we are the ultimate choice for comfort and giggles, making us everybody's favorite.</span>
                </div>
            </div>
            <div class="slide-container mx-0 my-auto flex max-w-[600px]">
                <div class="flex gap-10 items-center slide absolute px-64">
                    <img src="assets/images/hotel-3.jpeg" class="w-[510px] h-96 object-cover">
                    <div class="content flex flex-col gap-5 fredoka">
                        <span class="text-pink-900 text-4xl tracking-wider">House of Sanctuary</span>
                        <span class="text-2xl">the great hotel for vacation</span>
                        <span class="leading-relaxed text-md">favehotels’ branded and iconic casual all-day dining restaurant, perfectly embodies the hotel’s overall design focus on simplicity and comfort.</span>
                    </div>
                </div>
                <div class="flex gap-10 items-center slide absolute px-64 opacity-0">
                    <img src="assets/images/hotel-2.jpeg" class="w-[510px] h-96 object-cover">
                    <div class="content flex flex-col gap-5 fredoka">
                        <span class="text-pink-900 text-4xl tracking-wider">House of Sanctuary</span>
                        <span class="text-2xl">strategic location with many tourist attraction</span>
                        <span class="leading-relaxed text-md">favehotels’ branded and iconic casual all-day dining restaurant, perfectly embodies the hotel’s overall design focus on simplicity and comfort.</span>
                    </div>
                </div>
                <div class="flex gap-10 items-center slide absolute px-64 opacity-0">
                    <img src="assets/images/hotel-1.webp" class="w-[510px] h-96 object-cover">
                    <div class="content flex flex-col gap-5 fredoka">
                        <span class="text-pink-900 text-4xl tracking-wider">House of Sanctuary</span>
                        <span class="text-2xl">Large room for family</span>
                        <span class="leading-relaxed text-md">signature headboard walls depict watercolor pastel vintage location-themed artwork. the quirky naming convention of the guest rooms further underpins the daringly playful character of the brand.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-[800px] right-[520px] px-64">
            <div class="flex gap-5">
                <a class="cursor-pointer z-10 border border-pink-900 rounded-full px-3.5 py-1.5 text-pink-900" onclick="changeSlide(-1)">&#10094;</a>
                <a class="cursor-pointer z-10 border border-pink-900 rounded-full px-3.5 py-1.5 text-pink-900" onclick="changeSlide(1)">&#10095;</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-10 bg-pink-900 px-64 py-10">
        <div class="flex justify-between items-end text-white fredoka pr-10">
            <span class="text-4xl tracking-wider">special for you</span>
            <div class="cursor-pointer flex gap-2 text-sm">
                <span class="hover:underline">view more details</span>
                <span>&#10095;</span>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <div class="bg-white rounded-md flex flex-col max-w-[22rem] max-h-[500px]">
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
            <div class="bg-white rounded-md flex flex-col max-w-[22rem] max-h-[500px]">
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
            <div class="bg-white rounded-md flex flex-col max-w-[22rem] max-h-[500px]">
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
        </div>
    </div>
    <div class="px-64 py-24">
        <div class="flex items-center rounded-md membership pr-10">
            <div class="relative">
                <img src="assets/images/travel-1.jpeg" class="w-96 h-48 object-cover rounded-l-md" />
                <img src="assets/images/membership.png" class="w-24 h-24 absolute top-12 left-24">
            </div>
            <span class="text-pink-900 text-6xl fredoka py-3 px-6 text-wrap">everywhere within your hand</span>
            <button class="px-5 py-2 w-fit whitespace-nowrap border border-pink-900 rounded-md fredoka text-pink-900 hover:bg-pink-100/40" type="button">Join Membership</button>
        </div>
        <div class="pt-24">
            <div class="flex items-end justify-between fedroka pb-10">
                <div class="text-pink-900 text-4xl tracking-wider">favorite sanctuary</div>
                <div class="flex gap-2 text-sm text-gray-400 cursor-pointer">
                    <span class="hover:underline">view more hotels</span>
                    <span>&#10095;</span>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="rounded-xl shadow-xl bg-white h-fit min-h-72">
                    <img src="assets/images/hotel-1.webp" class="w-full h-64 object-cover rounded-t-md">
                    <div class="description fedroka px-5 py-5">
                        <div class="text-sm pb-3 font-bold">sanctuary lorem villa ipsum</div>
                        <div class="flex gap-2">
                            <img src="assets/images/location.svg" class="w-3 text-pink-900">
                            <span class="text-xs font-light">Denpasar, Bali</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-xl bg-white h-fit min-h-72">
                    <img src="assets/images/hotel-2.jpeg" class="w-full h-64 object-cover rounded-t-md">
                    <div class="description fedroka px-5 py-5">
                        <div class="text-sm pb-3 font-bold">sanctuary lorem villa ipsum</div>
                        <div class="flex gap-2">
                            <img src="assets/images/location.svg" class="w-3 text-pink-900">
                            <span class="text-xs font-light">Denpasar, Bali</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-xl bg-white h-fit min-h-72">
                    <img src="assets/images/hotel-3.jpeg" class="w-full h-64 object-cover rounded-t-md">
                    <div class="description fedroka px-5 py-5">
                        <div class="text-sm pb-3 font-bold">sanctuary lorem villa ipsum</div>
                        <div class="flex gap-2">
                            <img src="assets/images/location.svg" class="w-3 text-pink-900">
                            <span class="text-xs font-light">Denpasar, Bali</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-xl bg-white h-fit min-h-72">
                    <img src="assets/images/travel-1.jpeg" class="w-full h-64 object-cover rounded-t-md">
                    <div class="description fedroka px-5 py-5">
                        <div class="text-sm pb-3 font-bold">sanctuary lorem villa ipsum</div>
                        <div class="flex gap-2">
                            <img src="assets/images/location.svg" class="w-3 text-pink-900">
                            <span class="text-xs font-light">Denpasar, Bali</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-xl bg-white h-fit min-h-72">
                    <img src="assets/images/travel-2.jpeg" class="w-full h-64 object-cover rounded-t-md">
                    <div class="description fedroka px-5 py-5">
                        <div class="text-sm pb-3 font-bold">sanctuary lorem villa ipsum</div>
                        <div class="flex gap-2">
                            <img src="assets/images/location.svg" class="w-3 text-pink-900">
                            <span class="text-xs font-light">Denpasar, Bali</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-xl bg-white h-fit min-h-72">
                    <img src="assets/images/travel-3.jpeg" class="w-full h-64 object-cover rounded-t-md">
                    <div class="description fedroka px-5 py-5">
                        <div class="text-sm pb-3 font-bold">sanctuary lorem villa ipsum</div>
                        <div class="flex gap-2">
                            <img src="assets/images/location.svg" class="w-3 text-pink-900">
                            <span class="text-xs font-light">Denpasar, Bali</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-64 py-10 bg-pink-900">
        <div class="flex items-end justify-between fedroka pb-10 text-white">
            <div class="text-4xl tracking-wider">sanctuary moments</div>
            <div class="flex gap-2 text-sm cursor-pointer">
                <span class="hover:underline">view more posts</span>
                <span>&#10095;</span>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-8">
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-1.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-2.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-3.avif" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-4.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-1.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-2.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-3.avif" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-2.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
            <div class="relative cursor-pointer">
                <img src="assets/images/vacation-4.jpeg" class="h-80 w-96 object-cover rounded-md hover:contrast-50">
                <div class="absolute bottom-5 left-5 fredoka">
                    <button type="button" class="bg-pink-900 text-sm font-light px-5 py-1.5 text-white rounded-md hover:bg-pink-800">@sanctuary</button>
                </div>
            </div>
        </div>
    </div>
    <div class="px-64 py-10">
        <div class="flex justify-between items-end fredoka pr-10 pb-10">
            <span class="text-4xl text-pink-900 tracking-wider">happenings</span>
            <div class="cursor-pointer flex gap-2 text-sm">
                <span class="hover:underline">show more</span>
                <span>&#10095;</span>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <div class="flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/travel-1.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-600 font-semibold text-sm line-clamp-3 h-[4.5rem]">16 feb 2024</span>
                    <span class="fedroka font-semibold cursor-pointer w-fit rounded-md text-pink-900 text-sm hover:underline">
                        Read More
                    </span>
                </div>
            </div>
            <div class="flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/travel-2.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-600 font-semibold text-sm line-clamp-3 h-[4.5rem]">16 feb 2024</span>
                    <span class="fedroka font-semibold cursor-pointer w-fit rounded-md text-pink-900 text-sm hover:underline">
                        Read More
                    </span>
                </div>
            </div>
            <div class="flex flex-col max-w-[22rem] max-h-[500px]">
                <img src="assets/images/travel-3.jpeg" class="w-[22rem] h-64 min-h-64 object-cover rounded-md">
                <div class="flex flex-col gap-2 px-4 py-3">
                    <span class="text-sm text-gray-500">lorem ipsum</span>
                    <span class="text-2xl text-pink-900 fredoka">Travel Ipsum lorem</span>
                    <span class="text-gray-600 font-semibold text-sm line-clamp-3 h-[4.5rem]">16 feb 2024</span>
                    <span class="fedroka font-semibold cursor-pointer w-fit rounded-md text-pink-900 text-sm hover:underline">
                        Read More
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>
@include('components.website.booking')
@endsection
       
        