<nav class="text-gray-900 bg-white px-8 py-4 shadow-sm sticky top-0">
    <div class="w-3/4 mx-auto flex flex-row justify-between items-center">
        <div class="text-xl font-bold"><a href="/">MaGer</a></div>
        <div class="flex flex-row">
            <div class="mx-4 text-gray-900 font-bold"><a href="/">Home</a></div>
            <div class="mx-4 text-gray-900"><a href="#">Sample</a></div>
            <div class="mx-4 text-gray-900"><a href="#">Pricing</a></div>
        </div>
        <div>
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
</nav>
