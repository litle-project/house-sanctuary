@extends('layout.auth')

@section('style')
    <style>
        #img-container {
            background-image: url('{{ asset("assets/images/curved1.jpg") }}')
        }
    </style>
@endsection

@section('content')
<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section class="min-h-fixed">
        <div id="img-container" class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl">
            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-10"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <h1 class="mt-12 mb-2 text-white font-bold text-3xl">Welcome Back!</h1>
                        <p class="text-white">Login to manage the miracle contents!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5>Login</h5>
                        </div>
                        <div class="flex-auto p-6">
                            <form role="form text-left" method="post" action="{{ url('dashboard/login') }}">
                                @csrf
                                <div class="mb-4">
                                    <input
                                        type="email"
                                        class="text-sm w-full rounded-lg border border-gray-300 bg-white py-2 px-3 text-gray-700 focus:outline-pink-600"
                                        placeholder="Email"
                                        name="email"
                                        value="{{ old('email') ?? '' }}"
                                    />
                                </div>
                                <div class="mb-4">
                                    <input
                                        type="password"
                                        class="text-sm w-full rounded-lg border border-gray-300 bg-white py-2 px-3 text-gray-700 focus:outline-pink-600"
                                        placeholder="Password"
                                        name="password"
                                    />
                                </div>
                                <div class="min-h-6 pl-6.92 mb-0.5 block">
                                    <input id="terms" class="w-4.92 h-4.92 ease-soft -ml-6.92 rounded-1.4 checked:bg-gradient-to-tl checked:from-pink-600 checked:to-pink-600 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-pink-600 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" name="remember" />
                                    <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-pink-600" for="terms"> Remember Me </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-pink-700 to-pink-600 hover:border-pink-600 hover:bg-pink-700 hover:text-white">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection