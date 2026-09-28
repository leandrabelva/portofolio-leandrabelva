<section id="organizations" class="py-20 px-6 bg-stone-950 text-amber-50 relative overflow-hidden select-none">
    <img src="{{ asset('assets/background_black paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto space-y-8 relative z-10">
        
        <div class="flex justify-center animate-float relative p-2">
            <img src="{{ asset('assets/Organization.png') }}" alt="Organizations" class="h-20 sm:h-28 object-contain hover:scale-105 transition drop-shadow-lg">
        </div>

        <div class="relative px-2 sm:px-10">
            
            <button id="orgPrevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 z-30 w-11 h-11 rounded-full bg-stone-900/90 border border-amber-200/50 text-amber-100 flex items-center justify-center hover:bg-pink-600 hover:scale-110 transition duration-300 shadow-2xl backdrop-blur-md cursor-pointer">
                &#10094;
            </button>

            <div id="orgScroller" class="flex gap-6 overflow-x-auto scroll-smooth py-6 px-2 no-scrollbar cursor-grab active:cursor-grabbing">
                
                @forelse($organizations as $org)
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] shrink-0 group relative rounded-3xl overflow-hidden bg-amber-50/95 border border-amber-200/80 shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:border-pink-300">
                    
                    <div class="absolute top-3 left-1/2 -translate-x-1/2 z-20 w-3.5 h-3.5 rounded-full bg-pink-500 border border-stone-800 shadow-md"></div>
                    
                    <div class="relative h-[400px] w-full overflow-hidden">
                        
                        <img src="{{ asset('storage/' . $org->image) }}" 
                             onerror="this.src='{{ asset('assets/logo_binus.png') }}'" 
                             alt="{{ $org->organization_name }}" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 pointer-events-none">

                        <div class="absolute inset-0 bg-gradient-to-t from-stone-950/90 via-stone-950/30 to-transparent transition-opacity duration-300 group-hover:opacity-0"></div>

                        <div class="absolute bottom-0 left-0 right-0 p-5 z-10 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="font-serif-y2k text-lg font-bold text-amber-100 leading-snug">
                                {{ $org->organization_name }}
                            </h3>
                            <p class="text-xs text-pink-300 font-medium mt-1">
                                {{ $org->role }} <span class="text-amber-200/60">| {{ $org->period }}</span>
                            </p>
                        </div>

                        <div class="absolute inset-0 bg-stone-950/90 backdrop-blur-md p-6 flex flex-col justify-between opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20 border-2 border-pink-400/50 rounded-3xl">
                            <div class="space-y-3">
                                <h4 class="font-serif-y2k text-base font-bold text-pink-400 border-b border-pink-500/30 pb-2">
                                    {{ $org->organization_name }}
                                </h4>
                                <p class="text-xs text-amber-50/90 leading-relaxed font-sans overflow-y-auto max-h-[250px] pr-1">
                                    {{ $org->description }}
                                </p>
                            </div>

                            <div class="pt-2 border-t border-amber-200/20 text-right">
                                <span class="text-[10px] font-semibold text-pink-300 uppercase tracking-wider">
                                    {{ $org->role }} ({{ $org->period }})
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                @empty
                <div class="w-full text-center py-12">
                    <p class="text-stone-400 font-medium">Belum ada data organisasi di database.</p>
                </div>
                @endforelse

            </div>

            <button id="orgNextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 z-30 w-11 h-11 rounded-full bg-stone-900/90 border border-amber-200/50 text-amber-100 flex items-center justify-center hover:bg-pink-600 hover:scale-110 transition duration-300 shadow-2xl backdrop-blur-md cursor-pointer">
                &#10095;
            </button>

        </div>

    </div>
</section>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scroller = document.getElementById('orgScroller');
        const prevBtn = document.getElementById('orgPrevBtn');
        const nextBtn = document.getElementById('orgNextBtn');

        if (scroller && prevBtn && nextBtn) {
          
            prevBtn.addEventListener('click', () => {
                scroller.scrollBy({ left: -340, behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', () => {
                scroller.scrollBy({ left: 340, behavior: 'smooth' });
            });

            let isDown = false;
            let startX;
            let scrollLeft;

            scroller.addEventListener('mousedown', (e) => {
                isDown = true;
                scroller.classList.add('cursor-grabbing');
                startX = e.pageX - scroller.offsetLeft;
                scrollLeft = scroller.scrollLeft;
            });

            scroller.addEventListener('mouseleave', () => {
                isDown = false;
                scroller.classList.remove('cursor-grabbing');
            });

            scroller.addEventListener('mouseup', () => {
                isDown = false;
                scroller.classList.remove('cursor-grabbing');
            });

            scroller.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - scroller.offsetLeft;
                const walk = (x - startX) * 2; 
                scroller.scrollLeft = scrollLeft - walk;
            });
        }
    });
</script>