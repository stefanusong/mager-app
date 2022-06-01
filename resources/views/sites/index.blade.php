<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12 min-h-screen">
                <div class="flex flex-row justify-between items-center">
                    <h1 class="font-bold text-2xl w-1/2 overflow-ellipsis">My Sites</h1>
                </div>
                <div class="flex flex-row justify-between items-center">
                    <h1 class="font-bold text-md text-gray-600 w-1/2 overflow-ellipsis">You have {{ count($sites) }}
                        site(s)</h1>
                </div>

                @if (session()->has('create-success'))
                    <div id="alert-2" class="flex p-4 mt-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                            {{ session('create-success') }}
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                            data-collapse-toggle="alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                @endif

                <div class="grid grid-cols-3 mt-12 gap-4">
                    @foreach ($sites as $site)
                        <div
                            class="mt-12 group shadow-lg rounded-2xl w-80 p-4 bg-gray-100 hover:bg-gray-50 transition-all duration-300 ease-in-out">
                            <div class="flex flex-col items-start gap-4 h-80">
                                <p class="font-extrabold text-2xl">{{ $site->company_name }}</p>
                                <p
                                    class="font-bold text-sm {{ $site->is_public ? 'text-green-400' : 'text-red-400' }}">
                                    {{ $site->is_public ? 'Open for public' : 'Not open for public' }}</p>
                                <img src="{{ url('/img//' . $site->theme->slug . '.png') }}"
                                    alt="professional template" class="w-full h-max rounded-xl" />
                                <div class="flex flex-row items-center justify-end w-full text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                    <p class="font-bold text-sm">mager.com/{{ $site->slug }}</p>

                                </div>


                            </div>
                            <div class="flex items-center justify-between gap-4 mt-6">
                                <a
                                    class="w-1/2 px-4 py-2 text-center text-blue-400 border-0 rounded-lg text-grey-500 bg-white hover:text-blue-500 transition-all duration-300 ease-in-out">
                                    Edit
                                </a>
                                <a href="/dashboard/sites/{{ $site->slug }}" target="_blank"
                                    class="w-1/2 text-center border-0 bg-gradient-to-r from-blue-400 to-blue-500 font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">
                                    Visit Site
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</x-app-layout>
