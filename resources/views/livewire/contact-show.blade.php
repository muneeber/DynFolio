<div>
    {{-- Do your work, then step back. --}}
    <div class="flex flex-col  bg-white  mt-4 mx-auto max-w-7xl p-4 rounded">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-gray-200">
                <caption class="py-2 text-start text-sm text-gray-600">Contacted Messages:</caption>
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Phone Number</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Subject</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">btn</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($messages as $item)
                        
                  <tr class="{{ $item->hasRead == 0 ? 'bg-blue-400 text-white' : '' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $item->first_name }} {{ $item->last_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->phone_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->subject }}</td>
                    {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item-> }}</td> --}}
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <button type="button" wire:click='showMes({{ $item->id }})' class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-500 text-white hover:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none">
                            Read Message
                          </button>
                     
                    </td>
                  </tr>
                  @endforeach
    
               
                </tbody>
              </table>
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
                      <h3 class="font-bold text-gray-800"> Contact Us Message </h3>
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
                  <div class=" p-4 overflow-auto ">
                    <div class="flex">
                        <h2>Subject:</h2>
                        <p class="ml-2">{{ $subject }}</p>
                    </div>
                    <br>
                    <div class="">
                        <h2 class=" mb-2">Message:</h2>
                        <p class="ml-2 bg-gray-200 text-black p-4 rounded">{{ $details }}</p>
                  </div>
                  <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                      <button id="closeModal" type="button" wire:click="closeModal"
                          class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                          Close
                      </button>
                      <button type="button"  wire:click="readMessage({{ $messageId }})"
                          class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                          Save changes
                      </button>
                  </div>
              </div>
          </div>
      </div>
      @endif
</div>