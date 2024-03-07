<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html id="main">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>House of Sanctuary</title><meta name="description" content="Feel Like Home!">
        <meta property="og:title" content="House of Sanctuary">
        <meta property="og:description" content="Feel Like Home!">
        <meta property="og:url" content="https://houseofsanctuary.com">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://houseofsanctuary.com/wp-content/uploads/2023/12/NPP05685_HDR-1024x682.jpg">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="House of Sanctuary">
        <meta name="twitter:description" content="Feel Like Home!">
        <meta name="twitter:url" content="https://houseofsanctuary.com">
        <meta name="twitter:image" content="https://houseofsanctuary.com/wp-content/uploads/2023/12/NPP05685_HDR-1024x682.jpg">
        <link id="favicon" rel="shortcut icon" href="https://houseofsanctuary.com/wp-content/uploads/2023/12/cropped-Final-Logo-Brand-House-of-Sanctuary-03-150x150.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('style')
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="header bg-pink-900 text-white p-3 flex justify-between items-center sticky top-0 z-30 shadow-xl">
            <a class="logo font-light text-2xl tracking-widest" href="{{ url('/') }}">House of Sanctuary</a>
            <ul class="flex gap-5 font-light uppercase text-sm">
                <a
                    class="cursor-pointer p-2 hover:bg-white/10 px-5 rounded-md {{ Request::segment(1) == 'hotel' ? 'menu-active' : '' }}"
                    href="{{ url('hotel') }}"
                >
                    Hotels
                </a>
                <a
                    class="cursor-pointer p-2 hover:bg-white/10 px-5 rounded-md {{ Request::segment(1) == 'deal' ? 'menu-active' : '' }}"
                    href="{{ url('deal') }}"
                >
                    Deals
                </a>
                <a
                    class="cursor-pointer p-2 hover:bg-white/10 px-5 rounded-md {{ Request::segment(1) == 'meeting' ? 'menu-active' : '' }}"
                    href="{{ url('meeting') }}"
                >
                    Meetings
                </a>
                <a
                    class="cursor-pointer p-2 hover:bg-white/10 px-5 rounded-md {{ Request::segment(1) == 'weeding' ? 'menu-active' : '' }}"
                    href="{{ url('weeding') }}"
                >
                    Weedings
                </a>
                <a
                    class="cursor-pointer p-2 hover:bg-white/10 px-5 rounded-md {{ Request::segment(1) == 'news' ? 'menu-active' : '' }}"
                    href="{{ url('news') }}"
                >
                    News
                </a>
                <button class="cursor-pointer p-2 bg-white px-5 rounded-md text-pink-800 font-normal" onclick="openModal()">
                    Book Now
                </button>
            </ul>
        </div>
        @yield('content')
        <footer class="bg-pink-900 px-64 flex flex-col">
            <div class="flex justify-between py-5 border-b border-white/30">
                <div class="flex flex-col gap-5">
                    <div class="text-white text-2xl fedroka font-medium tracking-wider">Stay connected with sanctuary</div>
                    <div class="flex gap-5">
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/facebook.svg') }}" class="w-10 h-10 object-cover">
                        </div>
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/instagram.png') }}" class="w-10 h-10 object-cover">
                        </div>
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/x.svg') }}" class="w-10 h-10 object-cover">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex gap-2 text-white text-2xl fedroka font-medium tracking-wider">
                        <span>Join membership now</span>
                        <span class="font-light">&#10095;</span>
                    </div>
                    <div class="flex gap-5">
                        <div class="flex items-center rounded-md px-3 py-1 border border-white text-white hover:bg-white/20 cursor-pointer">
                            <img src="{{ asset('assets/images/apple.svg') }}" class="w-8 h-8 object-cover">
                            <div class="flex flex-col pl-5">
                                <span class="text-xs">Download on the</span>
                                <span>App Store</span>
                            </div>
                        </div>
                        <div class="flex items-center rounded-md px-3 py-1 border border-white text-white hover:bg-white/20 cursor-pointer">
                            <img src="{{ asset('assets/images/playstore.svg') }}" class="w-8 h-8 object-cover">
                            <div class="flex flex-col pl-5">
                                <span class="text-xs uppercase">Get it on</span>
                                <span>Google Play</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex py-5 gap-3 fredoka border-b border-white/30">
                <div class="text-white">
                    <div>Our Company</div>
                    <div class="flex flex-col pt-5 tracking-wider gap-3">
                        <div class="flex gap-10">
                            <span class="cursor-pointer hover:underline text-sm font-thin min-w-60">Hotel Management</span>
                            <span class="cursor-pointer hover:underline text-sm font-thin min-w-60">Ecommerce & Global Distribution</span>
                            <span class="cursor-pointer hover:underline text-sm font-thin min-w-60">Property Management System</span>
                        </div>
                        <div class="flex gap-10">
                            <span class="cursor-pointer hover:underline text-sm font-thin min-w-60">Our Story</span>
                            <span class="cursor-pointer hover:underline text-sm font-thin min-w-60">Legal</span>
                            <span class="cursor-pointer hover:underline text-sm font-thin min-w-60">Disclaimer</span>
                        </div>
                    </div>
                </div>
                <div class="text-white flex flex-col gap-5">
                    <div>Follow our journey</div>
                    <div class="flex gap-2">
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/linkedin.svg') }}" class="w-8 h-8 object-cover">
                        </div>
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/facebook.svg') }}" class="w-8 h-8 object-cover">
                        </div>
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/instagram.png') }}" class="w-8 h-8 object-cover">
                        </div>
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/x.svg') }}" class="w-8 h-8 object-cover">
                        </div>
                        <div class="p-1 rounded-md cursor-pointer hover:bg-white/10">
                            <img src="{{ asset('assets/images/youtube.svg') }}" class="w-8 h-8 object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-5 py-5 border-b border-white/30 cursor-pointer">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/e8b542373603483d466f48746ff4cc04b0790713.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/e8031e9ce9d6fd516ca5f48759992a1be236538a.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/4e359a85d6d081377497ed5cde178ac3e710e633.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/c6f4197e5a5a16884dd187ff39b19f3f30739086.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/2213eeab30f0220af0a8eadee37e9d9600f9944c.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/0c153b399d5d9c1c14984e2164864471f467d407.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/8bcd9508e3c7bfb7e1df99e0e36fcdb375933735.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/f467fb4db0c78741e66144fb7defffe86cc9e642.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/41b6cfec96a96e6d2e8e07fcf3fd3138c4fa6306.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
                <img src="https://images.archipelagohotels.com/archipelagointernational/v1/imgs/Homepage/6810ba1b9ad94ab59d2f454d801d1d160cecdf8c.svg" class="w-20 h-10 object-cover p-1.5 rounded-md mx-3 my-2 hover:bg-white/20">
            </div>
            <div class="flex items-center text-white text-xs justify-between py-5">
                <div>Copyright 2024 © Sanctuary</div>
                <div class="flex gap-3 cursor-pointer">
                    <span class="hover:bg-white/20 rounded-md px-2 py-2.5">Cookie Prefrences</span>
                    <span class="hover:bg-white/20 rounded-md px-2 py-2.5">DSAR</span>
                </div>
            </div>
        </footer>
        <script src="{{ asset('assets/script/modal.js') }}"></script>
        <script src="{{ asset('assets/script/script.js') }}"></script>
        @yield('script')
    </body>
</html>