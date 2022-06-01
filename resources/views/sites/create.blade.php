<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12 min-h-screen">
                <div class="flex flex-row justify-start items-center">
                    <div class="">
                        <a href="{{ route('dashboard') }}"
                            class="w-max font-bold shadow-lg bg-gray-200 py-2 px-6 text-gray-500 rounded-xl hover:bg-gray-300 transition-all duration-500 ease-in-out">&lt;
                            Back</a>
                    </div>
                    <div class="ml-4">
                        <h1 class="font-bold text-3xl overflow-ellipsis text-gray-800">Create Site</h1>
                        <div class="">
                            <span
                                class="relative text-xs inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                                <span aria-hidden="true" class="absolute inset-0 bg-blue-200 opacity-50 rounded-full">
                                </span>
                                <span class="relative">
                                    Theme: {{ $theme->name }}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>


                @if ($errors->any())
                    <div class="flex flex-row justify-center">
                        <span
                            class="bg-red-100 text-center text-red-800 text-lg font-semibold px-2.5 py-0.5 rounded-xl dark:bg-red-200 dark:text-red-900 mt-12">Please
                            enter all fields</span>
                        </span>
                    </div>
                @endif
                <form action="/dashboard/sites" method="POST" class="w-full flex flex-col justify-center items-center">
                    @csrf
                    {{-- Home --}}
                    <div class="bg-slate-100 w-3/4 rounded-xl p-6 flex flex-col mt-8">
                        <h1 class="font-bold text-xl text-center mb-4">I. Home</h1>
                        <label for="company_name" class="text-gray-700">
                            Company Name<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="company_name"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="company_name" placeholder="Enter your company name" />

                        <label for="headline" class="text-gray-700">
                            Headline<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="headline"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="headline" placeholder="Enter your headline" />

                        <label for="subheadline" class="text-gray-700">
                            Sub-Headline<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="subheadline"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="subheadline" placeholder="Enter your sub-headline" />
                    </div>
                    {{-- Home --}}

                    {{-- About --}}
                    <div class="bg-slate-100 w-3/4 rounded-xl p-6 flex flex-col mt-8">
                        <h1 class="font-bold text-xl text-center mb-4">II. About</h1>
                        <label for="about_us" class="text-gray-700">
                            About your company<span class="text-red-500 required-dot">*</span>
                        </label>
                        <textarea class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            id="about_us" placeholder="Tell us about your company" name="about_us" rows="5"
                            cols="40"></textarea>

                    </div>
                    {{-- About --}}

                    {{-- Services --}}
                    <div class="bg-slate-100 w-3/4 rounded-xl p-6 flex flex-col mt-8">
                        <h1 class="font-bold text-xl text-center mb-4">III. Services</h1>
                        <label for="service1" class="text-gray-700">
                            Service #1<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="service1"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="service1" placeholder="Enter your first service" />

                        <label for="service2" class="text-gray-700">
                            Service #2<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="service2"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="service2" placeholder="Enter your second service" />

                        <label for="service3" class="text-gray-700">
                            Service #3<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="service3"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="service3" placeholder="Enter your third service" />
                    </div>
                    {{-- Services --}}

                    {{-- Contact --}}
                    <div class="bg-slate-100 w-3/4 rounded-xl p-6 flex flex-col mt-8">
                        <h1 class="font-bold text-xl text-center mb-4">IV. Contact</h1>
                        <label for="email" class="text-gray-700">
                            Email<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="email"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="email" placeholder="Enter your email" />

                        <label for="phone" class="text-gray-700">
                            Phone<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="phone"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="phone" placeholder="Enter your phone" />

                        <label for="instagram" class="text-gray-700">
                            Instagram<span class="text-red-500 required-dot">*</span>
                        </label>
                        <input type="text" id="instagram"
                            class="my-2 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                            name="instagram" placeholder="Enter your instagram" />
                    </div>
                    {{-- Contact --}}

                    {{-- Additional --}}
                    <div class="bg-slate-100 w-3/4 rounded-xl p-6 flex flex-col mt-8">
                        <h1 class="font-bold text-xl text-center mb-4">V. Additional</h1>
                        <label for="slug" class="text-gray-700">
                            Site URL<span class="text-red-500 required-dot">*</span>
                        </label>

                        <div class="flex relative my-2">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                http://mager.com/
                            </span>
                            <input type="text" id="with-email"
                                class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                                name="slug" placeholder="mycompany" />
                        </div>

                        <div class="mt-8 flex flex-row items-center">
                            <span class="text-gray-400 font-medium mr-2">
                                Open for public
                            </span>
                            <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                <input type="checkbox" name="is_public" id="is_public"
                                    class="checked:bg-green-500 outline-none focus:outline-none focus:ring-0 focus:bg-green-500 right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                <label for="is_public"
                                    class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                </label>
                            </div>
                        </div>

                        <input type="text" hidden name="theme_id" id="theme_id" value="{{ $theme->id }}">
                    </div>
                    {{-- Additional --}}


                    <button type="submit"
                        class="w-3/4 mt-8 bg-gradient-to-r from-blue-500 to-blue-700 font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">
                        Publish Site</button>
                </form>


            </div>
        </div>
    </div>
    @livewireScripts
</x-app-layout>
