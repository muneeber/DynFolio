    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex  rounded-lg w-full  bg-[url('https://ez-snippet.vercel.app/images/cover.jpeg')] bg-no-repeat bg-cover">
        <div
            class=" flex justify-center md:rounded -ld  overflow-hidden md:px-10 py-5 bg-blur backdrop-filter backdrop-blur-md w-full gap-2 md:gap-10">
            <div class="">
                <img alt="Neeraj Walia" loading="lazy" width="120" height="120" decoding="async"
                    class="object-cover border-4 border-white rounded-full shadow-md"
                    style="color:transparent"
                    src="{{ Storage::url($header_image) }}">
            </div>
            <div class="flex md:flex-1 flex-col justify-center gap-4">
                <div class="flex justify-between items-center gap-5 ">
                    <div class="text-3xl flex flex-col font-bold capitalize text-highlight">{{ $name }}<div
                            class="text-sm font-thin flex justify-between items-center">@ {{ $handle }}<a
                                class="block md:hidden" target="_blank"
                                href="https://instagram.com/ezSnippet">
                                <button
                                    class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-cardPrimary text-primary font-semibold text-xs p-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                    </svg></button></a></div>
                    </div><a class="hidden md:block" target="_blank"
                        href="https://instagram.com/ezSnippet"><button
                            class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-cardPrimary text-primary font-semibold text-xs py-2 px-4">
                            {{-- <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-instagram">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                            </svg> --}}
                            {!! $header_icon !!}
                            <span class="hidden md:block">{{ $cta }}</span></button></a>
                </div>
            </div>

        </div>
    </div>
