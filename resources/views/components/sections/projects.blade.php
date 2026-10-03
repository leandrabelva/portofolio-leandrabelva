<section id="projects" class="py-20 px-6 bg-stone-950 text-amber-50 relative overflow-hidden">
    <img src="{{ asset('assets/background_black paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0"></div>

    <div class="max-w-7xl mx-auto space-y-12 relative z-10">
        
        <div class="flex justify-center animate-float relative p-2">
            <img src="{{ asset('assets/Project.png') }}" alt="Projects" class="h-20 sm:h-28 object-contain hover:scale-105 transition drop-shadow-lg">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch pt-4">
            
            @forelse($projects as $project)
            <div class="opacity-0 animate-fade-up relative group flex flex-col">
                
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center">
                    <div class="w-3.5 h-3.5 rounded-full bg-pink-400 border border-stone-800 shadow-md"></div>
                    <div class="w-0.5 h-4 bg-pink-400/50"></div>
                </div>

                <div class="bg-amber-50/95 backdrop-blur-md border border-amber-200/80 text-stone-900 rounded-3xl p-5 sm:p-6 h-full flex flex-col justify-between shadow-2xl hover:-translate-y-2 hover:shadow-pink-500/20 group-hover:border-pink-300 transition duration-300">
                    
                    <div>
                        <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden mb-4 border border-stone-300 shadow-inner bg-stone-900 relative group/media">
                            @if($project->embed_url)
                                <iframe src="{{ $project->embed_url }}" class="w-full h-full border-0 pointer-events-none" allowfullscreen></iframe>
                                <a href="{{ $project->embed_url }}" target="_blank" rel="noopener noreferrer" 
                                   class="absolute inset-0 bg-black/30 hover:bg-black/10 transition flex items-center justify-center opacity-0 group-hover/media:opacity-100">
                                    <span class="bg-pink-500 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow-lg flex items-center gap-1">
                                        🔍 Klik untuk Preview / Buka
                                    </span>
                                </a>
                            @elseif($project->pdf_file)
                                <iframe src="{{ $project->pdf_url }}" class="w-full h-full border-0 pointer-events-none"></iframe>
                                <a href="{{ $project->pdf_url }}" target="_blank" rel="noopener noreferrer" 
                                   class="absolute inset-0 bg-black/30 hover:bg-black/10 transition flex items-center justify-center opacity-0 group-hover/media:opacity-100">
                                    <span class="bg-pink-500 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow-lg flex items-center gap-1">
                                        📄 Buka PDF Fullscreen
                                    </span>
                                </a>
                            @else
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                               
                                <a href="{{ $project->image_url }}" target="_blank" rel="noopener noreferrer" 
                                   class="absolute inset-0 bg-black/30 hover:bg-black/10 transition flex items-center justify-center opacity-0 group-hover/media:opacity-100">
                                    <span class="bg-pink-500 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow-lg flex items-center gap-1">
                                        🖼️ Lihat Foto Fullscreen
                                    </span>
                                </a>
                            @endif

                            <span class="absolute top-2.5 left-2.5 bg-stone-900/85 text-amber-100 text-[11px] px-2.5 py-1 rounded-full font-semibold backdrop-blur-sm shadow border border-white/10 z-10 pointer-events-none">
                                {{ $project->category }}
                            </span>
                        </div>

                        <h3 class="font-serif-y2k text-xl font-bold text-[#800000] mb-2 leading-snug group-hover:text-pink-600 transition-colors">
                            {{ $project->title }}
                        </h3>

                        <p class="text-stone-800 text-xs sm:text-sm leading-relaxed font-medium mb-5 line-clamp-4">
                            {{ $project->description }}
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-stone-300/70">
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                               class="px-3 py-1.5 rounded-xl bg-stone-900 hover:bg-pink-600 text-amber-50 text-xs font-semibold shadow transition duration-200 flex items-center gap-1.5">
                                <img src="{{ asset('assets/github.png') }}" class="w-3.5 h-3.5 invert" alt="GitHub">
                                GitHub
                            </a>
                        @endif

                        @if($project->website_url)
                            <a href="{{ $project->website_url }}" target="_blank" rel="noopener noreferrer"
                               class="px-3 py-1.5 rounded-xl bg-pink-500 hover:bg-pink-600 text-white text-xs font-semibold shadow transition duration-200 flex items-center gap-1">
                                🌐 Website
                            </a>
                        @endif

                        @if($project->figma_url)
                            <a href="{{ $project->figma_url }}" target="_blank" rel="noopener noreferrer"
                               class="px-3 py-1.5 rounded-xl bg-stone-200 hover:bg-amber-200 text-stone-900 text-xs font-semibold shadow transition duration-200 flex items-center gap-1">
                                <img src="{{ asset('assets/figma.png') }}" class="w-3.5 h-3.5 object-contain" alt="Figma">
                                Figma
                            </a>
                        @endif
                    </div>

                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-stone-400 font-medium">Belum ada data project di database.</p>
            </div>
            @endforelse

        </div>

    </div>
</section>