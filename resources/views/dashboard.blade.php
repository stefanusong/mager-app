<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12 min-h-screen">
                <div class="flex flex-row justify-between items-center">
                    <h1 class="font-bold text-2xl w-1/2 overflow-ellipsis">Explore Templates</h1>
                    <button
                        class="w-max bg-gradient-to-r from-blue-400 to-blue-500 font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">Filter</button>
                </div>

                {{-- Template cards --}}
                <div class="grid grid-cols-3 mt-12 gap-4">
                    {{-- Real template --}}
                    @foreach ($themes as $theme)
                        <div
                            class="group shadow-lg rounded-2xl w-80 p-4 bg-gray-100 hover:bg-gray-50 transition-all duration-300 ease-in-out">
                            <div class="flex flex-col items-start justify-evenly gap-4 h-80">
                                <p class="font-extrabold text-2xl">{{ $theme->name }}</p>
                                <img src="{{ url('/img//' . $theme->slug . '.png') }}" alt="professional template"
                                    class="w-full h-max rounded-xl" />
                                <div class="flex flex-row items-center justify-end w-full text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="font-bold text-lg">{{ $theme->price }}</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between gap-4 mt-6">
                                <a href="/dashboard/preview/{{ $theme->slug }}" target="_blank"
                                    class="w-1/2 px-4 py-2 text-center text-blue-400 border-0 rounded-lg text-grey-500 bg-white hover:text-blue-500 transition-all duration-300 ease-in-out">
                                    Preview
                                </a>
                                <a href="/dashboard/sites/create?theme={{ $theme->slug }}"
                                    class="w-1/2 text-center border-0 bg-gradient-to-r from-blue-400 to-blue-500 font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">
                                    Use Template
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{-- Real template --}}

                    {{-- Dummy template --}}
                    @for ($i = 0; $i < 10; $i++)
                        <div
                            class="group shadow-lg rounded-2xl w-80 p-4 bg-gray-100 hover:bg-gray-50 transition-all duration-300 ease-in-out">
                            <div class="flex flex-col items-start justify-evenly gap-4 text-gray-500 h-80">
                                <p class="font-extrabold text-2xl">Coming Soon</p>
                                <img src="{{ url('/img/dummyimg.png') }}" alt="professional template"
                                    class="w-full h-max rounded-xl" />
                                <div class="flex flex-row items-center justify-end w-full text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="font-bold text-lg">IDR ??</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between gap-4 mt-6">
                                <a
                                    class="cursor-not-allowed w-1/2 px-4 py-2 text-center text-gray-400 border-0 rounded-lg text-grey-500 bg-white">
                                    Preview
                                </a>
                                <a
                                    class="cursor-not-allowed w-1/2 text-center border-0 bg-gradient-to-r from-gray-400 to-gray-500 font-bold px-4 py-2 text-white rounded-lg">
                                    Use Template
                                </a>
                            </div>
                        </div>
                    @endfor
                    {{-- Dummy template --}}
                </div>
                {{-- Template cards --}}

            </div>
        </div>
    </div>
    @livewireScripts
</x-app-layout>
