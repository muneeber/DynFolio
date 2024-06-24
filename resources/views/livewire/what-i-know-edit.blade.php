<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Edit Hero Section') }}
                </h2>
            </div>
            <div>
                <a href="{{ route('dashboard') }}" type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
                    Back
                </a>
            </div>
        </div>
    </x-slot>
    <div class="col-span-2 p-6 md:col-span-2 lg:col-span-3 bg-black">
        <div class="text-xl font-medium mt-2 text-zinc-200 mb-5">What I know</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($skills as $skillCategory)

            <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 pb-2 rounded-md shadow-lg">
                <div class="text-primary font-medium text-lg capitalize tracking-wider">{{ $skillCategory->name }}</div>
                <div class="flex flex-wrap gap-2">
                    @foreach ($skillCategory->skills as $skill)

                    <div
                        class="rounded-md bg-body text-xs text-primary p-2 capitalize @if($skill->color) border border-{{ $skill->color }}-500/60 @endif">
                        {{ $skill->name }}</div>
                    @endforeach


                </div>
                <div class=" gap-3  mt-2 flex justify-center items-center">
                    <button wire:click='editSkillCategory({{ $skillCategory->id }})' type="button" class="w-1/2 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Edit
                      </button>
                      <button wire:confirm='Do You Really Wanna Delete {{ $skillCategory->name }}'  wire:click='deleteSkillCategory({{ $skillCategory->id }})' type="button" class="w-1/2 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-red-800 bg-red-500 text-white shadow-sm hover:bg-red-500 disabled:opacity-50 disabled:pointer-events-none">
                        Delete
                      </button>
                </div>
            </div>
            @endforeach
            <div wire:click='Add' class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
                <div class="text-primary font-medium text-lg tracking-wider">Add New Skill Set</div>
                <div class="flex  justify-center items-center gap-2 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="  m-2  h-10 text-white" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-plus">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                </div>
            </div>



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
                                <label for="name" class="text-sm font-semibold text-gray-800">Skill Set Name</label>
                                <input type="text" wire:model="skillCategoryName" id="name"
                                    class="p-2 border border-gray-200 rounded-lg" placeholder="Skill Set Name">
                            </div>
                            <div class=" flex w-full gap-3">
                                <div class=" w-2/5">
                                    <div class="max-w-sm">
                                        <label for="input-label" class="block text-sm font-medium mb-2 ">Skill
                                            Name</label>
                                        <input type="text" id="input-label" wire:model="skillName"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            placeholder="React">
                                    </div>
                                </div>
                                <div class=" w-2/5">
                                    <label for="hs-select-label" class="block text-sm font-medium mb-2">Border
                                        Color</label>
                                    <select id="hs-select-label" wire:model="skillColor"
                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                        @foreach ($colors as $color)
                                        <option value="{{ $color }}" class="text-{{ $color }}-500">{{ $color }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class=" w-1/5 flex justify-center items-center">

                                    <button type="button" wire:click="addSkill"
                                        class="py-2 mt-5 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Add
                                    </button>
                                </div>

                            </div>
                            @if (count($newSkills)>0)
                            <div  class="p-2 border rounded">
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-3 py-1 text-start text-xs font-medium text-gray-500 uppercase">
                                                                Skill</th>
                                                            <th scope="col"
                                                                class="px-3 py-1 text-start text-xs font-medium text-gray-500 uppercase">
                                                                Border</th>
                                                            <th scope="col"
                                                                class="px-3 py-1 text-end text-xs font-medium text-gray-500 uppercase">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        @foreach ($newSkills as $index => $item)

                                                        <tr wire:key='{{ $index }}'>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $item['name'] }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                {{ $item['color'] }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                <button type="button"
                                                                    wire:click='deleteSkill({{ $index }})'
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Remove</button>
                                                            </td>
                                                        </tr>
                                                        @endforeach



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button id="closeModal" type="button" wire:click="closemodal"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Close
                    </button>
                    <button type="button" @if($skillEditing) wire:click='update' @else wire:click="create" @endif 
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="">
        <p class="text"></p>
        <p class='text-slate-500 hidden'> testing</p>
        <p class='text-gray-500 hidden'> testing</p>
        <p class='text-zinc-500 hidden'> testing</p>
        <p class='text-neutral-500 hidden'> testing</p>
        <p class='text-stone-500 hidden'> testing</p>
        <p class='text-red-500 hidden'> testing</p>
        <p class='text-orange-500 hidden'> testing</p>
        <p class='text-amber-500 hidden'> testing</p>
        <p class='text-yellow-500 hidden'> testing</p>
        <p class='text-lime-500 hidden'> testing</p>
        <p class='text-green-500 hidden'> testing</p>
        <p class='text-emerald-500 hidden'> testing</p>
        <p class='text-teal-500 hidden'> testing</p>
        <p class='text-cyan-500 hidden'> testing</p>
        <p class='text-sky-500 hidden'> testing</p>
        <p class='text-blue-500 hidden'> testing</p>
        <p class='text-indigo-500 hidden'> testing</p>
        <p class='text-violet-500 hidden'> testing</p>
        <p class='text-purple-500 hidden'> testing</p>
        <p class='text-fuchsia-500 hidden'> testing</p>
        <p class='text-pink-500 hidden'> testing</p>
        <p class='text-rose-500 hidden'> testing</p>
    </div>
    {{-- In work, do what you enjoy. --}}
    
</div>