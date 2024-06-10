{{-- Do your work, then step back. --}}
<div class="">
    {{-- Be like water. --}}
    @foreach($links as $link)
        @if($link->enabled)
            <a class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4" href="{{ $link->url }}">
                {!! $link->icon->svg_code !!}
                {{ $link->name }}
            </a>
        @endif
    @endforeach
    <div class="mt-5">Socials</div>
</div>
