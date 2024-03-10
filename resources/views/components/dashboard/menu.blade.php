<aside class="max-w-62.5 bg-white ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="../pages/dashboard.html" target="_blank">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">House Sanctuary Dashboard</span>
        </a>
    </div>
    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <div class="flex flex-col mt-8">
        <a class="menu" href="{{ url('/') }}" target="_blank">
            <div class="flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer"">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Website</p>
                </div>
            </div>
        </a>
        <a class="menu" href="{{ url('/dashboard/banner') }}">
            <div id="banner" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('banner', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-image" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage Banner</p>
                </div>
            </div>
        </a>
        <div class="menu">
            <div id="homepage" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('homepage', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-home" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage Homepage</p>
                </div>
                <div class="px-2">
                    <i class="fas fa-chevron-up" id="arrow-homepage" aria-hidden="true"></i>
                </div>
            </div>
            <ul class="hidden children" id="homepage">
                <li class="hover:bg-gray-100 py-2 pl-12 pr-2">
                    <a href="/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/">
                        <p class="leading-relaxed capitalize">Special Section</p>
                    </a>
                </li>
                <li class="hover:bg-gray-100 py-2 pl-12 pr-2">
                    <a href="/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/">
                        <p class="leading-relaxed capitalize">Favorite Section</p>
                    </a>
                </li>
                <li class="hover:bg-gray-100 py-2 pl-12 pr-2">
                    <a href="/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/">
                        <p class="leading-relaxed capitalize">Moment Section</p>
                    </a>
                </li>
                <li class="hover:bg-gray-100 py-2 pl-12 pr-2">
                    <a href="/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/">
                        <p class="leading-relaxed capitalize">Happening Section</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu">
            <div id="hotel" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('hotel', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-hotel" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage Hotel</p>
                </div>
            </div>
        </div>
        <div class="menu">
            <div id="deal" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('deal', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-percent" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage Deal</p>
                </div>
            </div>
        </div>
        <div class="menu">
            <div id="meeting" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('meeting', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage Meeting Room</p>
                </div>
            </div>
        </div>
        <div class="menu">
            <div id="weeding" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('weeding', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage Weeding Place</p>
                </div>
            </div>
        </div>
        <div class="menu">
            <div id="news" class="menu-parent flex justify-between items-center hover:bg-gray-100 p-2 cursor-pointer" onclick="toggle('news', this)">
                <div class="flex items-center">
                    <div class="grid mr-3 text-xs text-white rounded-lg place-items-center w-7 h-7 bg-gradient-to-tr from-pink-400 to-pink-600">
                        <i class="fas fa-newspaper" aria-hidden="true"></i>
                    </div>
                    <p class="block antialiased font-sans text-base leading-relaxed text-blue-grey-900 font-bold capitalize">Manage News</p>
                </div>
            </div>
        </div>
    </div>
</aside>