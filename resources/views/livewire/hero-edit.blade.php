<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Edit Hero Section') }}
                </h2>
            </div>
            <div>
                <a href="{{ route('dashboard') }}" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
                    Back
                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-w-lg mx-auto bg-white rounded shadow p-2 m-3">
        @if (session()->has('message'))
            <div class="bg-green-200 text-green-800 p-2 mb-4">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="update">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" placeholder="Name">
                @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <label for="handle" class="block text-gray-700 text-sm font-bold mb-2">Handle</label>
                <input type="text" wire:model="handle" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="handle" placeholder="Handle">
                @error('handle') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <label for="cta" class="block text-gray-700 text-sm font-bold mb-2">CTA</label>
                <input type="text" wire:model="cta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cta" placeholder="CTA">
                @error('cta') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <span class="flex gap-3">Previous Icon {!! $header_icon !!}</span>
                <label for="cta" class="block text-gray-700 text-sm font-bold mb-2">Call To Action Icon</label>
                <select wire:model='icon' class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    @foreach ($icons as $icon)
                        <option value="{{ $icon->id }}">{{ $icon->name }}</option>
                    @endforeach
                </select>
                @error('cta') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <label for="header_image" class="block text-gray-700 text-sm font-bold mb-2">Header Image</label>
                <label for="file-input" class="sr-only">Choose file</label>
                <input type="file" wire:model='image' name="file-input" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4">
                @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                @if ($imagePreviewUrl) 
                    <div>
                        <p>Uploading Image:</p>
                        <img src="{{ $imagePreviewUrl }}" alt="Preview">
                    </div>
                @endif
                <h2>Previous Image</h2>
                <img src="{{ Storage::url($header_image) }}" alt="header image" class="w-1/4">
            </div>
            <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Submit
            </button>
        </form>
    </div>
</div>
