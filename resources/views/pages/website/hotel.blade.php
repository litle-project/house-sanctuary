@extends('layout.website')

@section('style')
<link rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""
/>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endsection

@section('script')
    <script src="{{ asset('assets/script/map.js') }}"></script>
@endsection

@section('content')
<main>
    <div class="h-[600px] max-h-[700px] z-10" id="map"></div>
    <div class="px-64 py-24 flex flex-col gap-10">
        <div class="fredoka flex items-center justify-between">
            <span class="text-pink-900 text-4xl tracking-wider">it's where the fun start</span>
            <div class="flex gap-4">
                <button type="button" class="rounded-md bg-pink-900 text-white px-5 py-2.5 text-sm">Indonesia</button>
                <button type="button" class="rounded-md bg-white text-pink-900 border border-pink-900 px-5 py-2.5 text-sm">Upcoming</button>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-8">
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/bali.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Jimbaran</span>
                        <span>Bali</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/yogya.png" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Malioboro</span>
                        <span>Daerah Istimewa Yogyakarta</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/lombok.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Lombok</span>
                        <span>Nusa Tenggara Barat</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/semarang.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Semarang</span>
                        <span>Jawa Tengah</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/banyuwangi.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Banyuwangi</span>
                        <span>Jawa Timur</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/jayapura.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Jayapura</span>
                        <span>Papua</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/sumbawa.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Pink Beach</span>
                        <span>Sumbawa</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/aceh.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Aceh</span>
                        <span>Aceh</span>
                    </div>
                </div>
            </div>
            <div class="relative drop-shadow-lg rounded-xl cursor-pointer max-w-96 max-h-64">
                <img src="assets/images/pontianak.jpeg" class="w-96 h-64 object-cover transition ease-in-out rounded-xl hover:scale-105 hover:duration-300 hover:contrast-50">
                <div class="absolute bottom-5 left-5">
                    <div class="flex flex-col text-white fedroka">
                        <span class="text-2xl font-bold">Pontianak</span>
                        <span>Kalimantan Barat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('components.website.booking')
@endsection