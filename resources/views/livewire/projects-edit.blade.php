<div>
  {{-- Care about people's approval and you will be their prisoner. --}}
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Project Edit') }}
    </h2>
  </x-slot>
    

  
      {{-- Stop trying to control. --}}
      <div class="flex flex-col gap-10 lg:px-10">

      <section class="grid gap-8 p-5 mt-5 md:p-0">
        <div class="text-xl font-medium text-black">Projects</div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl::grid-cols-4 gap-5">
            @foreach ($projects as $project)
                
            <a
                target="_blank" href="{{ $project->link }}">
                <div
                    class="flex flex-col overflow-hidden gap-2 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                        src="{{ Storage::url($project->image) }}">
                    <div class="flex flex-col px-4 py-2 h-16">
                        <div class="flex font-bold">{{ $project->title }}</div>
                        <div class="flex text-info text-xs capitalize">{{ $project->description }}</div>
                    </div>
                    <div class=" w-full flex justify-center items-center">

                    <button type="button" class="w-[90%] py-2 m-1 px-3 mb-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                      Edit
                    </button>
                    </div>

                </div>
               
            </a>
            @endforeach
            <a
            target="_blank" href="{{ $project->link }}">
            <div
                class="flex flex-col overflow-hidden gap-2 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                    data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                    src="{{ Storage::url($project->image) }}">
                <div class="flex flex-col px-4 py-2 h-16">
                    <div class="flex font-bold">{{ $project->title }}</div>
                    <div class="flex text-info text-xs capitalize">{{ $project->description }}</div>
                </div>
                <div class=" w-full flex justify-center items-center">

                <button type="button" class="w-[90%] py-2 m-1 px-3 mb-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  Edit
                </button>
                </div>

            </div>
           
        </a>
        </div>
    </section>
      </div>
      <form  wire:submit.prevent='create' class="max-w-sm mx-auto bg-white shadow p-3 m-4 mt-8">
        <h2 class="text-2xl font-bold text-center tet-primary my-2">New Main Projects</h2>
        <div class="mb-5">
          <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
          <input type="text" id="title" wire:model="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter Project's Title Here" required />
        </div>
        <div class="mb-5">
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description:</label>
          <input type="text" id="description" wire:model="description" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Next.js 13, React Hook Form, Zustand, Radix UI, Typescript, Tailwind CSS" required />
        </div>
        <div class="mb-5">
          <label for="link" class="block mb-2 text-sm font-medium text-gray-900">Link:</label>
          <input type="text" id="link" wire:model="link" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="https://github.com/nwaliaez/eCommerce" required />
        </div>
        <div class="mb-5">
          <label for="header_image" class="block text-gray-700 text-sm font-bold mb-2">Header Image</label>
          <label for="file-input" class="sr-only">Choose file</label>
          <input type="file" id="file-input" wire:model="image" name="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4">
          @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="flex justify-end w-full">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add New Main Project</button>
        </div>
      </form>

</div>
