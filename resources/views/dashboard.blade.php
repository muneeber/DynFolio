<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font  text-gray-900">Portfolio Edit</h1>
            </div>
            <div class="flex flex-wrap -m-4">
               
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('hero-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Hero</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <a href="{{ route('sideNav-edit') }}"
                        class="border border-gray-200 flex  items-center gap-6 justify-center bg-white  shadow p-4 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Side Nav</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route("projects-edit") }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Main Projects</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('whatiknow-edit') }}"
                        class="border border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">What I Know</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('small-projects-edit') }}"
                        class="border border-gray-200  flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Small Projects</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route("other-projects-edit") }}"
                        class="border border-gray-200  flex locked items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Other Projects</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <a href="{{ route('footer-edit') }}"
                        class="border  border-gray-200 flex items-center gap-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Footer</h2>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <a href="{{ route('contact-show') }}"
                        class="border  border-gray-200 items-center flex gap-x-6 justify-center p-4 rounded-lg bg-white  shadow">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font ">Contact </h2>
                    </a>
                </div>
               
                
            </div>
        </div>
    </section>
{{--  
     --}}
   
    <button type="button" class="py-3 hidden lockAlert px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
        Vertically centered modal
      </button>
      
      <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
          <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
              <h3 class="font-bold text-gray-800 dark:text-white">
                Locked Card
              </h3>
              <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-vertically-centered-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
            <div class="p-4 overflow-y-auto">
              <p class="text-gray-800 dark:text-neutral-400">
                You don't have access to this page. Please unlock the card to access it. <br/>😉 Just Kidding I am Building This Feature Now So Please Wait.
              </p>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
              
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
                OK
              </button>
            </div>
          </div>
        </div>
      </div>
     
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lockedElements = document.querySelectorAll('.locked');
            const lockAlert = document.querySelector('.lockAlert');

            lockedElements.forEach(element => {
                element.addEventListener('click', function(event) {
                    console.log('clicked');
                    lockAlert.click();
                });
                element.classList.add('relative');
                element.classList.add('cursor-not-allowed');
                
                    element.removeAttribute('href');

                const overlay = document.createElement('div');
                overlay.className = 'absolute inset-0 bg-gray-700 bg-opacity-60 flex items-center justify-center rounded-lg text-white';
                overlay.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock-keyhole"><circle cx="12" cy="16" r="1"/><rect x="3" y="10" width="18" height="12" rx="2"/><path d="M7 10V7a5 5 0 0 1 10 0v3"/></svg>
                `;
                element.appendChild(overlay);
            });
        });
    </script> 
</x-app-layout>