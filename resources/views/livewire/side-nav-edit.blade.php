<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Edit Side Nav Section') }}
                </h2>
            </div>
            <div>
                <a href="{{ route('dashboard') }}" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
                    Back
                </a>
            </div>
        </div>
    </x-slot>
    <div
    class=" flex relative flex-col h-full p-5 text-[#8b8a91] bg-[#1c1b23] rounded-lg w-full  overflow-y-auto pb-20 md:pb-5">
        
    @foreach ($links as $link)
        
    <a class="flex bg-transparent {{ $link->status ?  : 'opacity-50 ' }} items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4">{!! $link->svg_icon !!}
        {{ $link->Title}}

        <button type="button" class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" wire:click='edit({{ $link->id }})'>
            Edit
          </button>
          @if ($link->status)
          <button type="button" wire:click='disableLink({{ $link->id }})' class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-600 text-white hover:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none">
            Disable
          </button>
              
          @else
          <button type="button" wire:click='enableLink({{ $link->id }})' class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
            Enable
            </button>
          @endif
          
          <button type="button" wire:click='deleteLink({{ $link->id }})' wire:confirm='Are you sure to Delete {{ $link->Title }}' class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
            Delete
          </button>
    </a>
    @endforeach
    <a wire:click='modelOpen' class="flex bg-transparent border  rounded-lg cursor-pointer items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-plus"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
        Add New Link
    </a>
    
    
    <div class="mt-5">Socials</div>
    @foreach ($socials as $social)
    <a class="flex bg-transparent {{ $social->status ?  : 'opacity-50 ' }} items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4">
        {!! $social->svg_icon !!}
        {{ $social->Title }}
        <button type="button" class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" wire:click='editSocial({{ $social->id }})'>
            Edit
        </button>
        @if ($social->status)
            <button type="button" wire:click='disableSocial({{ $social->id }})' class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-600 text-white hover:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none">
                Disable
            </button>
        @else
            <button type="button" wire:click='enableSocial({{ $social->id }})' class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                Enable
            </button>
        @endif
        <button type="button" wire:confirm='Are you sure to delete {{ $social->Title }}' class="py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" wire:click='deleteSocial({{ $social->id }})'>
            Delete
        </button>
    </a>
@endforeach
    <a wire:click='modelOpen' class="flex bg-transparent border  rounded-lg cursor-pointer items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-plus"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
        Add New Social Link
    </a>
    
    
    </div>
    @if($modal)
    <div id="modal" class="fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto">
        <!-- Backdrop overlay -->
        <div class="fixed inset-0 bg-black opacity-50"></div>

        <!-- Modal content -->
        <div
            class="mt-7 opacity-100 duration-500 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto relative z-[90]">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800"> Add New Main Project </h3>
                    <button type="button" wire:click="closeModal"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class=" p-4 overflow-auto">
                    <div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Title</label>
                                <input type="text" wire:model="title" id="name" class="p-2 border border-gray-200 rounded-lg" placeholder="Videos">
                            </div>
                           
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Link</label>
                                <input type="text" wire:model="link" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder="https://www.instagram.com/ezsnippet/">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Svg Icon</label>
                                <p class="text-xs font-semibold text-blue-800">For Icons go to <a href="https://lucide.dev" target="blank" class=" text-blue-700 cursor-pointer underline">LUCIDE</a></p>
                                <input type="text" wire:model="svg_icon" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"/></svg>'>
                            </div>
                            
                    

                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button id="closeModal" type="button" wire:click="closeModal"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Close
                    </button>
                    <button type="button" @if ($editLink) wire:click="updateLink" @else wire:click="createLink" @endif 
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
