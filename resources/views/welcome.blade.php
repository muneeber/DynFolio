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
                
                    <livewire:sidenav />

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
                    {{-- <livewire:otherCategoryProjects /> --}}
                </div>
             <livewire:contact />
            </div>
            <livewire:footer />
        </main>
    </div>
    <div class="flex-1  flex-col gap-4 bg-cardPrimary hidden p-4 pb-2 rounded-md shadow-lg">
        <div class="text-primary font-medium text-lg capitalize tracking-wider">Rina Morin</div>
        <div class="flex flex-wrap gap-2">
            <!--[if BLOCK]><![endif]-->
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-slate-500/60 ">
                Carter Huffman</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-gray-500/60 ">
                Azalia Blackburn</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-zinc-500/60 ">
                Gareth Delacruz</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-neutral-500/60 ">
                Ali Cunningham</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-stone-500/60 ">
                James Dominguez</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-red-500/60 ">
                Kasper Norton</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-orange-500/60 ">
                Fletcher Wright</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-amber-500/60 ">
                Graiden Hale</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-yellow-500/60 ">
                Lucian Santos</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-lime-500/60 ">
                Kim Guy</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-green-500/60 ">
                Wallace Kennedy</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-emerald-500/60 ">
                McKenzie Griffin</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-teal-500/60 ">
                Xerxes Dixon</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-cyan-500/60 ">
                MacKensie West</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-sky-500/60 ">
                Uriah Riddle</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-blue-500/60 ">
                Faith Pena</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-indigo-500/60 ">
                Cameron Rojas</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-violet-500/60 ">
                Dominique Wilkerson</div>
            
            <div class="rounded-md bg-body text-xs text-primary p-2 capitalize  border border-purple-500/60 ">
                Maisie Mcbride</div>
            <!--[if ENDBLOCK]><![endif]-->


        </div>
        <div class=" gap-3  mt-2 flex justify-center items-center">
            <button wire:click="editSkillCategory(22)" type="button" class="w-1/2 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Edit
              </button>
              <button wire:confirm="Do You Really Wanna Delete Rina Morin" wire:click="deleteSkillCategory(22)" type="button" class="w-1/2 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-red-800 bg-red-500 text-white shadow-sm hover:bg-red-500 disabled:opacity-50 disabled:pointer-events-none">
                Delete
              </button>
        </div>
    </div>

</body>

</html>