<section id="certification" class="py-20 px-4 sm:px-6 bg-stone-950 text-amber-50 relative overflow-hidden select-none">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   
    <img src="{{ asset('assets/background_pink paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-100 pointer-events-none" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto space-y-6 relative z-10">
        
        <div class="flex justify-center animate-float relative p-2">
            <img src="{{ asset('assets/Certification.png') }}" alt="Certification" class="h-25 sm:h-30
             object-contain hover:scale-105 transition drop-shadow-lg">
        </div>

        <div class="relative px-2 sm:px-12 overflow-hidden">
            
          
            <div class="swiper certSwiper !py-8 !overflow-visible">
                <div class="swiper-wrapper">
                    
                    @forelse($certifications as $cert)
                    
                    <div class="swiper-slide !w-[320px] sm:!w-[520px]">
                        <div class="relative group rounded-xl overflow-hidden shadow-2xl transition duration-300">
                            
                            
                            <div class="w-full h-[220px] sm:h-[350px] bg-stone-900 rounded-xl overflow-hidden border border-amber-100/30">
                                <img src="{{ $cert->image_url }}" 
                                     onerror="this.src='{{ asset('assets/logo_binus.png') }}'" 
                                     alt="{{ $cert->title }}" 
                                     class="w-full h-full object-cover">
                            </div>

                          
                            @if($cert->credential_url)
                            <div class="absolute inset-0 bg-black/60 backdrop-blur-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-4 text-center">
                                <h3 class="font-serif-y2k text-lg font-bold text-amber-100 mb-1">
                                    {{ $cert->title }}
                                </h3>
                                <p class="text-xs text-pink-300 font-medium mb-3">
                                    {{ $cert->issuer }}
                                </p>
                                <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" 
                                   class="px-4 py-2 rounded-xl bg-pink-500 hover:bg-pink-600 text-white text-xs font-semibold shadow-lg transition transform hover:scale-105">
                                    📜 View Credential
                                </a>
                            </div>
                            @endif

                        </div>
                    </div>
                    @empty
                    <div class="swiper-slide text-center py-12">
                        <p class="text-stone-400 font-medium">Belum ada data sertifikasi di database.</p>
                    </div>
                    @endforelse

                </div>
            </div>

        
            <button class="cert-prev absolute left-1 sm:left-4 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-stone-900/90 border border-amber-200/50 text-amber-100 flex items-center justify-center hover:bg-pink-600 hover:scale-110 transition duration-300 shadow-2xl backdrop-blur-md">
                &#10094;
            </button>
            <button class="cert-next absolute right-1 sm:right-4 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-stone-900/90 border border-amber-200/50 text-amber-100 flex items-center justify-center hover:bg-pink-600 hover:scale-110 transition duration-300 shadow-2xl backdrop-blur-md">
                &#10095;
            </button>

        </div>

    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Swiper('.certSwiper', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                initialSlide: 0,
                loop: true,
                speed: 800, 
                autoplay: {
                    delay: 2500, 
                    disableOnInteraction: false, 
                    pauseOnMouseEnter: true, 
                },
                coverflowEffect: {
                    rotate: 50,      
                    depth: 300,      
                    modifier: 1,
                    slideShadows: true, 
                },
                navigation: {
                    nextEl: '.cert-next',
                    prevEl: '.cert-prev',
                },
            });
        });
    </script>
</section>