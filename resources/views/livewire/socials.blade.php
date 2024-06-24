<div class="">
{{-- 
    <a target="_blank"
        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
        href="https://www.instagram.com/ezsnippet/">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b5179e"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
        </svg> Instagram
    </a>
    <a target="_blank"
        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
        href="https://github.com/nwaliaez">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2a9d8f"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
            <path
                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
            </path>
            <path d="M9 18c-4.51 2-5-2-7-2"></path>
        </svg> Github
    </a>
    <a target="_blank"
        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
        href="https://www.youtube.com/channel/UCWYz4W6m1toUP7x0M1od3fA">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e63946"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
            <path
                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17">
            </path>
            <path d="m10 15 5-3-5-3z"></path>
        </svg> Youtube
    </a>
    <a target="_blank"
        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
        href="https://stackoverflow.com/users/20331641/neeraj-walia">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f77f00"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers">
            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
            <polyline points="2 17 12 22 22 17"></polyline>
            <polyline points="2 12 12 17 22 12"></polyline>
        </svg>
        Stack overflow
    </a>
    <a target="_blank"
        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
        href="https://www.linkedin.com/in/ezSnippet/">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0277b5"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin">
            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
            </path>
            <rect width="4" height="12" x="2" y="9"></rect>
            <circle cx="4" cy="4" r="2"></circle>
        </svg> Linkedin
    </a> --}}
    
    @foreach ($socials as $item)
    <a target="_blank"
    class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
    href="{{ $item->link }}">
    {!! $item->svg_icon !!}
    {{ $item->Title }}
</a>
    @endforeach
</div>