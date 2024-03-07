<section>
    <div id="modal-overlay" class="z-40 bottom-0 top-0 right-0 left-0 bg-black/50 hidden fixed" onclick="closeModal()"></div>
    <div id="modal" class="hidden transition ease-in duration-300 bg-white rounded-xl p-4 absolute left-[250px] z-50">
        <div class="modal-content flex items-center">
            <div class="flex flex-col gap-2">
                <span class="text-pink-900 font-medium">Destination</span>
                <span class="w-72">
                    <input
                        type="text"
                        class="bg-transparent outline-none w-full font-light"
                        placeholder="Where do you want to go?">
                </span>
            </div>
            <div class="flex flex-col gap-2 border-l border-black pl-5">
                <span class="text-pink-900 font-medium">Check in</span>
                <span>
                    <input
                        type="text"
                        value="28 Feb 24"
                        class="bg-transparent outline-none"
                        placeholder="Where do you want to go?"
                    >
                </span>
            </div>
            <div class="flex flex-col gap-2 border-l border-black pl-5">
                <span class="text-pink-900 font-medium">Check out</span>
                <span>
                    <input
                        type="text"
                        value="28 Feb 24"
                        class="bg-transparent outline-none w-full"
                        placeholder="Where do you want to go?"
                    >
                </span>
            </div>
            <div class="flex flex-col gap-2 border-l border-black pl-5">
                <span class="text-pink-900 font-medium">Room & Guest</span>
                <span class="w-80">
                    <input
                        type="text"
                        class="bg-transparent outline-none w-full font-light"
                        value="1 Room - 2 Guest">
                </span>
            </div>
            <div>
                <button class="bg-pink-900 text-white text-sm uppercase px-5 py-2.5 font-medium rounded-md">Check Now</button>
            </div>
        </div>
    </div>
</section>