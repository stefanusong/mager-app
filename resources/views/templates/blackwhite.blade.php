@extends('layouts.template')

@section('content')
    <nav class="text-gray-900 bg-white px-8 py-4 shadow-sm sticky top-0">
        <div class="flex flex-row justify-between items-center">
            <div class="text-xl font-bold"><a href="#">{{ !empty($site) ? $site->company_name : 'Company Name' }}</a></div>
            <div>
                <a href="">
                    <button
                        class="w-32 bg-black font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">
                        Learn more
                    </button>
                </a>
            </div>
        </div>
    </nav>
    {{-- Home --}}
    <div class="overflow-hidden flex flex-row items-center">
        <div class="text-start py-6 px-4 sm:px-6 lg:py-6 lg:px-8">
            <div>
                <h2 class="text-3xl font-extrabold">
                    <span class="block">
                        {{ !empty($site) ? $site->headline : 'Some eye-catching headline here!' }}
                    </span>
                </h2>
                <span
                    class="block text-lg mt-4">{{ !empty($site) ? $site->subheadline : 'Some cool description here!' }}</span>
            </div>
            <div class="mt-14">
                <a href="">
                    <button
                        class="w-32 bg-black font-bold px-4 py-2 text-white rounded-lg hover:opacity-80 transition-all duration-500 ease-in-out">
                        Learn more
                    </button>
                </a>
            </div>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_vreuqxkv.json" background="transparent" speed="1"
            style="width: 500px; height: 500px;" loop autoplay></lottie-player>
    </div>
    {{-- Home --}}

    {{-- About --}}
    <div class="overflow-hidden flex flex-row items-center mt-8">
        <div class="text-start py-6 px-4 sm:px-6 lg:py-6 lg:px-8">
            <p class="text-4xl font-bold">About Us</p>
            <div class="mt-14 flex flex-row items-center justify-between">
                <img src="{{ url('/img/dummyimg.png') }}" alt="professional template" class="h-34 rounded-xl" />
                <div class="ml-32">
                    <p>{{ !empty($site)
                        ? $site->about_us
                        : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla placeat, eveniet officiis quod qui
                                                                                                        molestias ratione provident eaque tempore, veniam quisquam, ipsum ullam dolorum debitis ipsa.
                                                                                                        Numquam corrupti dolores eveniet vero delectus similique itaque voluptatibus. Dolorem eveniet, id
                                                                                                        reiciendis ab doloribus iusto fugit magni quas, officia totam sit veritatis quidem.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- About --}}

    {{-- Services --}}
    <div class="overflow-hidden flex flex-row items-center mt-8">
        <div class="flex flex-col py-6 px-4 sm:px-6 lg:py-6 lg:px-8 w-full">
            <div class="w-full flex flex-row justify-center">
                <p class="text-4xl font-bold">Services</p>
            </div>
            <div class="flex flex-row justify-evenly items-center mt-12">
                <div class="flex flex-row justify-center items-center">
                    <div
                        class="w-32 h-32 rounded-full flex justify-center items-center text-center bg-black text-white font-bold p-12">
                        <p>{{ !empty($site) ? $site->service1 : 'Service #1' }}</p>
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div
                        class="w-32 h-32 rounded-full flex justify-center items-center text-center bg-black text-white font-bold p-12">
                        <p>{{ !empty($site) ? $site->service2 : 'Service #2' }}</p>
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div
                        class="w-32 h-32 rounded-full flex justify-center items-center text-center bg-black text-white font-bold p-12">
                        <p>{{ !empty($site) ? $site->service3 : 'Service #3' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Services --}}

    {{-- Contact --}}
    <div class="overflow-hidden flex flex-row items-center mt-8">
        <div class="flex flex-col items-center justify-center py-6 px-4 sm:px-6 lg:py-6 lg:px-8 w-full">
            <div class="w-full flex flex-row justify-center mt-12 mb-12">
                <p class="text-4xl font-bold">Contact Us</p>
            </div>
            <div class="flex flex-row items-center mt-6 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                <p class="text-lg font-bold ml-4">{{ !empty($site) ? $site->email : 'email@mail.com' }}</p>
            </div>
            <div class="flex flex-row items-center mt-6 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>
                <p class="text-lg font-bold ml-4">{{ !empty($site) ? $site->phone : '0812345678' }}</p>
            </div>
            <div class="flex flex-row items-center mt-6 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
                <p class="text-lg font-bold ml-4">{{ !empty($site) ? $site->instagram : 'mager_official' }}</p>
            </div>
        </div>
    </div>
    {{-- Contact --}}
@endsection
