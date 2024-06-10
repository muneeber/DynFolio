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
    <div class=" bg-white rounded shadow  m-3 p-2">
    
        <div>
            <form wire:submit.prevent="addLink">
                <div>
                    <label for="name">Name</label>
                    <input type="text" wire:model="name" id="name">
                    @error('name') <span>{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="url">URL</label>
                    <input type="text" wire:model="url" id="url">
                    @error('url') <span>{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="enabled">Enabled</label>
                    <input type="checkbox" wire:model="enabled" id="enabled">
                    @error('enabled') <span>{{ $message }}</span> @enderror
                </div>
                <button type="submit">Add Link</button>
            </form>
        
            <ul>
                @foreach ($links as $link)
                    <li>
                        {{ $link->name }}
                        <button wire:click="toggleLink({{ $link->id }})">
                            {{ $link->enabled ? 'Disable' : 'Enable' }}
                        </button>
                        <button wire:click="deleteLink({{ $link->id }})">Delete</button>
                    </li>
                @endforeach
            </ul>
        </div>
        
    </div>


</div>
