<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <footer class="text-white bg-black w-full body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center ">
               {!! $ftIcon !!}
                <span class="ml-3 text-xl">{{ $ftTitle }}</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                {{ $ftText }} —
                <a href="{{ $ftLink }}" class="text-gray-600 ml-1" rel="noopener noreferrer"
                    target="_blank">{{ $ftUsername }}</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      
                <button wire:click='modelOpen' class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">Edit</button>
                
                {{-- <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Small
                  </button>
                  <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                    Button
                  </button> --}}
            </span>
        </div>
    </footer>
    @if($modal)
    <div id="modal" class="fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto">
        <!-- Backdrop overlay -->
        <div class="fixed inset-0 bg-black opacity-50"></div>
        {{-- $this->title='';
        $this->username='';
        $this->icon='';
        $this->text='';
        $this->link=''; --}}
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
                                <input type="text" wire:model="title" id="name" class="p-2 border border-gray-200 rounded-lg" placeholder="{{ $ftTitle }}">
                            </div>
                            <div class="flex flex-col gap-2">
                            <label for="name" class="text-sm font-semibold text-gray-800">Username</label>
                            <input type="text" wire:model="username" id="name"
                                class="p-2 border border-gray-200 rounded-lg" placeholder="{{ $ftUsername }}">
                        </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Link</label>
                                <input type="text" wire:model="link" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder="{{ $ftLink }}">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Svg Icon</label>
                                <p class="text-xs font-semibold text-blue-800">For Icons go to <a href="https://lucide.dev" target="blank" class=" text-blue-700 cursor-pointer underline">LUCIDE</a></p>
                                <input type="text" wire:model="icon" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder='{{ $ftIcon }}'>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Text</label>
                                <input type="text" wire:model="text" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder="{{ $ftText }}">
                            </div>
                        
                            
                    

                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button id="closeModal" type="button" wire:click="closeModal"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Close
                    </button>
                    <button type="button"  wire:click="saveChanges"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
