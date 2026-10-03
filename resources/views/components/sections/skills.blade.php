<section id="skills" class="py-20 px-6 bg-stone-950 text-amber-50 relative overflow-hidden select-none">
    <img src="{{ asset('assets/background_grey paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto space-y-10 relative z-10">
        
        <div class="flex justify-center animate-float relative p-2">
            <img src="{{ asset('assets/Skill.png') }}" alt="Skills" class="h-20 sm:h-30 object-contain hover:scale-105 transition drop-shadow-lg">
        </div>
        <p class="flex justify-center text-xs sm:text-sm tracking-wider text-stone-300">
            "Explore what i have learned!"
        </p>

        <div class="space-y-8 pt-4">
            
            @forelse($skillsByCategory as $category => $skills)
            <div class="bg-amber-50/90 backdrop-blur-md rounded-3xl p-6 sm:p-8 border border-amber-200/80 text-stone-900 shadow-2xl relative">
                
                <div class="absolute -top-3 right-8 w-4 h-4 rounded-full bg-pink-500 border border-stone-800 shadow-md"></div>

                <h3 class="font-serif-y2k text-2xl font-bold text-[#800000] mb-6 text-center border-b border-stone-300/80 pb-3 tracking-wide">
                    {{ $category }}
                </h3>

                <div class="flex flex-wrap justify-center items-center gap-6 sm:gap-8 pt-2">
                    @foreach($skills as $index => $skill)
                    
                    <div class="flex flex-col items-center justify-center w-24 h-24 sm:w-28 sm:h-28 p-3 rounded-2xl bg-white/95 border border-stone-300/80 shadow-md hover:shadow-pink-500/30 hover:border-pink-400 hover:scale-105 transition-all duration-300 cursor-default group"
                         style="animation: pureFloat 3s ease-in-out infinite; animation-delay: {{ ($index * 0.3) }}s;">
                        
                        <div class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 flex items-center justify-center mb-2">
                            <img src="{{ $skill->icon_url }}" 
                                 onerror="this.src='{{ asset('assets/github.png') }}'" 
                                 alt="{{ $skill->name }}" 
                                 class="w-full h-full object-contain group-hover:scale-110 transition duration-200">
                        </div>

                        <span class="font-semibold text-xs sm:text-sm text-stone-800 group-hover:text-pink-600 transition-colors text-center truncate w-full">
                            {{ $skill->name }}
                        </span>

                    </div>
                    @endforeach
                </div>

            </div>
            @empty
            <div class="text-center py-12">
                <p class="text-stone-400 font-medium">Belum ada data skill di database.</p>
            </div>
            @endforelse

        </div>

    </div>
</section>


<style>
@keyframes pureFloat {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-8px);
    }
}
</style>