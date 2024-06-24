<div class="col-span-2 p-6 md:col-span-2 lg:col-span-3">
    <div class="text-xl font-medium mt-2 text-zinc-200 mb-5">What I know</div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ($skills as $skill)
            
        <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
            <div class="text-primary font-medium text-lg tracking-wider">{{ $skill->name }}</div>
            <div class="flex flex-wrap gap-2">
                @foreach ($skill->skills as $skill)
                   
                <div class="rounded-md bg-body text-xs text-primary p-2 @if($skill->color) border border-{{ $skill->color }}-500/60 @endif">{{ $skill->name }}</div>
                @endforeach

                
            </div>
        </div>
        @endforeach

       
    </div>
</div>

{{-- <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
    <div class="text-primary font-medium text-lg tracking-wider">Backend</div>
    <div class="flex flex-wrap gap-2">
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-green-500/60">
            Node Js</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-gray-500/60">
            Express Js</div>
        <div class="rounded-md bg-body text-xs text-primary p-2">BUN Js</div>
        <div class="rounded-md bg-body text-xs text-primary p-2">Elysia</div>
        <div class="rounded-md bg-body text-xs text-primary p-2">Next Auth</div>
    </div>
</div>
<div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
    <div class="text-primary font-medium text-lg tracking-wider">Database</div>
    <div class="flex flex-wrap gap-2">
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
            MySql</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-emerald-500/60">
            MongoDB</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
            PostgreSQL</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-red-500/60">
            Redis</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-yellow-500/60">
            Elastic Search</div>
    </div>
</div>
<div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
    <div class="text-primary font-medium text-lg tracking-wider">Devops</div>
    <div class="flex flex-wrap gap-2">
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
            Docker</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
            Kubernetes</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-orange-500/60">
            GIT</div>
        <div class="rounded-md bg-body text-xs text-primary p-2">Jenkins</div>
        <div class="rounded-md bg-body text-xs text-primary p-2">Ansible</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-purple-500/60">
            Terraform</div>
        <div
            class="rounded-md bg-body text-xs text-primary p-2 border border-yellow-500/60">
            AWS</div>
    </div>
</div> --}}