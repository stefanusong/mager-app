@extends('layouts.landing')

@section('content')
    <div class="overflow-hidden flex flex-row items-center">
        <div class="text-start py-6 px-4 sm:px-6 lg:py-6 lg:px-8">
            <div>
                <h2 class="text-3xl font-extrabold">
                    <span class="block">
                        Mager mikirin website buat bisnismu ?
                    </span>
                    <span class="block text-blue-500 mt-3">
                        Pakai <span class="underline hover:text-blue-300 transition-colors ease-in-out duration-300">MaGer</span> aja !
                    </span>
                </h2>
                <span class="block text-lg mt-8">Buat website perusahaanmu dengan mudah, hemat, cepat, dan keren
                    tentunya.</span>
            </div>
            <div class="mt-14">
                <a href="{{ route('register') }}">
                    <button
                        class="w-32 bg-gradient-to-r from-blue-400 to-blue-500 font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">

                        @auth
                            Dashboard
                        @endauth
                        @guest
                            Try now
                        @endguest
                    </button>
                </a>
            </div>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_0ko1b5rz.json" background="transparent" speed="1"
            style="width: 500px; height: 500px;" loop autoplay></lottie-player>
    </div>

@endsection
