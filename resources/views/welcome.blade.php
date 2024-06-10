<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        .text-primary {
            color: #8b8a91;
        }

        .text-info {
            color: #4f4f52;
        }

        .text-highlight {
            color: #fff;
        }

        .bg-body {
            background-color: #14131a;
        }

        .bg-btnHighlight {
            background-color: #2bd576;
        }

        .bg-cardPrimary {
            background-color: #1c1b23;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-[#14131a]">
    <div class="flex">
        <aside class="hidden lg:flex h-screen fixed w-screen  sm:w-[300px] z-30">
            <div class=" toggle flex flex-col lg:m-5 w-full">
                <div class="hidden lg:flex  gap-2 p-5 pt-0">
                    <div class=" size-4 bg-green-400 rounded-full"></div>
                    <div class=" size-4 bg-green-400 rounded-full"></div>
                </div>
                <div
                    class=" flex relative flex-col h-full p-5 text-[#8b8a91] bg-[#1c1b23] rounded-lg w-full  overflow-y-auto pb-20 md:pb-5">
                    <div class="block lg:hidden p-5 z-10 text-primary absolute right-0 top-0 cursor-pointer text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-primary">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </div>
                    <livewire:navlinks />
                    <livewire:socials />
                    {{-- <livewire:sidenav /> --}}

                </div>
            </div>
        </aside>
        <main class=" flex-1 pl-0 lg:pl-[300px]  ">
            <nav class="flex sticky shadow-md top-0 z-20 bg-body p-5 text-info justify-between">
                <div></div>
                <div class="flex items-center gap-5">
                    <a href="#contact"
                        class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-btnHighlight text-highlight text-xs py-2 px-4">Contact
                        Me <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></a><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="flex lg:hidden cursor-pointer hover:text-primary transition-colors">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg></button>
                </div>
            </nav>
            <div>
                <livewire:hero />
                <div class="flex flex-col gap-10 lg:px-10">
                    <livewire:projects />
                    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-5 mt-5 md:p-0">
                        <livewire:whatIKnow />
                        <livewire:smallProjects />


                    </section>
                    <livewire:otherCategoryProjects />
                </div>
             <livewire:contact />
            </div>
            <livewire:footer />
        </main>
    </div>

</body>

</html>