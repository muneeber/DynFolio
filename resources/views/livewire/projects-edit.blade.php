<div>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Project Edit') }}
      </h2>
  </x-slot>

  <div class="flex flex-col gap-10 lg:px-10">
      <section class="grid gap-8 p-5 mt-5 md:p-0">
          <div class="text-xl font-medium text-black">Projects</div>
          <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-5">
              @foreach ($projects as $project)
                      <div class="flex flex-col overflow-hidden gap-2 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                          <img alt="{{ $project->title }}" loading="lazy" width="700" height="700" decoding="async" class="aspect-video object-cover" src="{{ Storage::url($project->image) }}">
                          <div class="flex flex-col px-4 py-2 h-16">
                              <div class="flex font-bold">{{ $project->title }}</div>
                              <div class="flex text-info text-xs capitalize">{{ $project->description }}</div>
                          </div>
                          <div class="w-full gap-3 flex justify-center items-center">
                              <button type="button" wire:click="edit({{ $project->id }})" class="w-1/2 py-2 m-1 px-3 mb-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                  Edit
                              </button>
                              <button wire:click='delete({{ $project->id }})' wire:confirm='Do you Want to delete it?' type="button" class="w-1/2 py-2 m-1 px-3 mb-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                                  Delete
                              </button>
                          </div>
                      </div>
              @endforeach

              <button type="button" wire:click="openModel" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent disabled:opacity-50 disabled:pointer-events-none">
                  <div class="flex flex-col overflow-hidden gap-2 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                      <img alt="Add new project" loading="lazy" decoding="async" class="aspect-square object-cover" src="{{ Storage::url("photos/5ZQBnfVbjAC8MO8m73F6IzSQu9ylohQktWZ56QTN.webp") }}">
                  </div>
              </button>
          </div>
      </section>
  </div>

  @if($model)
      <div id="modal" class="fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto">
          <!-- Backdrop overlay -->
          <div class="fixed inset-0 bg-black opacity-50"></div>
          
          <!-- Modal content -->
          <div class="mt-7 opacity-100 duration-500 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto relative z-[90]">
              <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                  <div class="flex justify-between items-center py-3 px-4 border-b">
                      <h3 class="font-bold text-gray-800">{{ $projectId ? 'Edit Project' : 'Add New Main Project' }}</h3>
                      <button type="button" wire:click="closeModel" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                          <span class="sr-only">Close</span>
                          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M18 6 6 18"></path>
                              <path d="m6 6 12 12"></path>
                          </svg>
                      </button>
                  </div>
                  <div class="p-4 overflow-y-auto">
                      <form wire:submit.prevent="{{ $projectId ? 'update' : 'create' }}" class="max-w-sm mx-auto bg-white shadow p-3 m-4 mt-8">
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
                              @if ($image)
                                  <div class="mt-2">
                                      <span class="block text-sm font-medium text-gray-700">New Image Preview:</span>
                                      <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="mt-2 rounded-md">
                                  </div>
                              @endif
                              @if ($projectId && !$image)
                                  <div class="mt-2">
                                      <span class="block text-sm font-medium text-gray-700">Current Image:</span>
                                      <img src="{{ Storage::url($projects->find($projectId)->image) }}" alt="Project Image" class="mt-2 rounded-md">
                                  </div>
                              @endif
                              @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                          </div>
                          <div class="flex justify-end w-full">
                              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ $projectId ? 'Update Project' : 'Add New Main Project' }}</button>
                          </div>
                      </form>
                  </div>
                  <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                      <button type="button" wire:click="closeModel" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                          Close
                      </button>
                      @if($projectId)
                      <button type="button" wire:click="update" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                          Save changes
                      </button>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  @endif
</div>
