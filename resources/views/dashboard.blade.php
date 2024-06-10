<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font  text-gray-900">Portfolio Edit</h1>
            </div>
            <div class="flex flex-wrap -m-4">
               
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('hero-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Hero</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <a href="{{ route('sideNav-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center bg-white  shadow p-4 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Side Nav</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route("projects-edit") }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Main Projects</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('whatiknow-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">What I Know</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('small-projects-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Small Projects</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route("other-projects-edit") }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Other Projects</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('footer-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Footer</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class=" bg-white m-3 p-2 rounded w-[85]">

    </div>
</x-app-layout>