<div class="grid bg-cardPrimary gap-6 p-6 shadow-lg">
    <div class="text-xl font-medium mt-2 text-zinc-200">More projects</div>
    <div class="grid grid-cols-1 gap-4 rounded-lg">
       
        @foreach ($projects as $project)
        <a  class="max-w-lg">
            <div class="flex items-center gap-1  text-primary rounded-lg">
                {!! $project->svg_icon_code !!}
                <div class="flex flex-1 flex-col px-4 py-2">
                    <div class="flex text-sm font-medium">{{ $project->title }}</div>
                    <div class="flex text-info text-xs ">{{ $project->description }}</div>
                </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </div>
            <div class=" gap-3  mt-2 flex justify-center items-center mx-3">
                <button wire:click='edit({{ $project->id }})' type="button" class="w-1/2 py-2 px-2 inline-flex justify-center items-center gap-x-2 text-xs font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Edit
                  </button>
                  <button wire:confirm='Do You Really Wanna Delete {{ $project->title }}'  wire:click='delete({{ $project->id }})' type="button" class="w-1/2 py-2 px-2 inline-flex justify-center items-center gap-x-2 text-xs font-medium rounded-lg border border-red-800 bg-red-500 text-white shadow-sm hover:bg-red-500 disabled:opacity-50 disabled:pointer-events-none">
                    Delete
                  </button>
            </div>
        </a>
        @endforeach
        <div wire:click='add' class="flex cursor-pointer items-center gap-1 max-w-lg text-primary border m-2 p-2 ml-0 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            <div class="flex flex-1 flex-col px-4 py-2">
                <div class="flex text-sm font-medium">Add New Side Project</div>
            </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </div>
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
                    <button type="button" wire:click="closemodal"
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
                                <input type="text" wire:model="title" id="name" class="p-2 border border-gray-200 rounded-lg" placeholder="File Sharing App">
                            </div>
                           
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Link</label>
                                <input type="text" wire:model="link" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder="https://github.com/nwaliaez/filetransfer-webrtc">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-semibold text-gray-800">Svg Icon</label>
                                <p class="text-xs font-semibold text-blue-800">For Icons go to <a href="https://lucide.dev" target="blank" class=" text-blue-700 cursor-pointer underline">LUCIDE</a></p>
                                <input type="text" wire:model="svg_icon" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"/></svg>'>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="">
                                    <label for="textarea-label" class="block text-sm font-medium mb-2 ">Description</label>
                                    <textarea wire:model='description' id="textarea-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none " rows="3" placeholder="Node js, Express, Web Sockets, WebRTC, ReactJs..."></textarea>
                                  </div>
                            </div>
                    

                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button id="closeModal" type="button" wire:click="closemodal"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Close
                    </button>
                    <button type="button" @if($projectEditing) wire:click="update" @else wire:click="create" @endif
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>