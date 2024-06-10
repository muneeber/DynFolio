    {{-- Stop trying to control. --}}
    <section class="grid gap-8 p-5 mt-5 md:p-0">
        <div class="text-xl font-medium text-zinc-200">Projects</div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl::grid-cols-4 gap-5">
            @foreach ($projects as $project)
                
            <a
                target="_blank" href="{{ $project->link }}">
                <div
                    class="flex flex-col overflow-hidden gap-3 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                        src="{{ Storage::url($project->image) }}">
                    <div class="flex flex-col px-4 py-2 h-24">
                        <div class="flex font-bold">{{ $project->title }}</div>
                        <div class="flex text-info text-xs capitalize">{{ $project->description }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
