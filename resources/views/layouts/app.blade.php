<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Belva - Y2K Portfolio')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,800;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    .font-serif-y2k { font-family: 'Playfair Display', serif; }

    @keyframes fadeInUpSmooth {
        from {
            opacity: 0;
            transform: translateY(20px); 
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-up {
        animation: fadeInUpSmooth 1.2s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }

    .delay-100 { animation-delay: 150ms; }
    .delay-200 { animation-delay: 300ms; }
    .delay-300 { animation-delay: 450ms; }
    .delay-400 { animation-delay: 600ms; }
    .delay-500 { animation-delay: 750ms; }

    @keyframes floatSoft {
        0%, 100% {
            transform: translateY(0px) rotate(2deg); 
        }
        50% {
            transform: translateY(-8px) rotate(2deg); 
        }
    }

    @keyframes floatTitle {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-5px); 
        }
    }

    .animate-float {
        animation: floatSoft 4s ease-in-out infinite;
    }

    .animate-float-title {
        animation: floatTitle 3.5s ease-in-out infinite;
    }
</style>
</head>
<body class="bg-black text-gray-100 antialiased selection:bg-pink-500 selection:text-white">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.modal-pdf')

   <footer class="py-16 px-6 bg-stone-950 text-amber-50 relative overflow-hidden text-center select-none border-t border-amber-200/20">
    
        <img src="{{ asset('assets/background_paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none" alt="Paper Texture">
        <div class="absolute inset-0 bg-black/50 z-0 pointer-events-none"></div>

        <div class="max-w-4xl mx-auto relative z-10 space-y-6 flex flex-col items-center">

            <div class="animate-float">
                <img src="{{ asset('assets/Logo Lean Baru.png') }}" alt="Logo Lean" class="h-14 sm:h-16 object-contain filter drop-shadow-md">
            </div>

            <div class="flex flex-wrap justify-center items-center gap-6 sm:gap-8 pt-2">
                
                <a href="mailto:leandrabelva26@gmail.com" class="flex flex-col items-center group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-50/90 backdrop-blur-md border border-amber-200 shadow-md flex items-center justify-center group-hover:scale-110 group-hover:border-pink-400 group-hover:shadow-pink-500/30 transition-all duration-300">
                        <span class="text-xl">📧</span>
                    </div>
                    <span class="text-xs font-semibold text-amber-100 group-hover:text-pink-400 transition mt-1.5 font-serif-y2k">Email Me</span>
                </a>

                <a href="https://www.linkedin.com/in/leandra-belva-varissa-perwira-negara-66055b325/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-50/90 backdrop-blur-md border border-amber-200 shadow-md flex items-center justify-center group-hover:scale-110 group-hover:border-pink-400 group-hover:shadow-pink-500/30 transition-all duration-300">
                        <span class="text-xl">💼</span>
                    </div>
                    <span class="text-xs font-semibold text-amber-100 group-hover:text-pink-400 transition mt-1.5 font-serif-y2k">LinkedIn</span>
                </a>

                <a href="https://instagram.com/leandrabelva" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-50/90 backdrop-blur-md border border-amber-200 shadow-md flex items-center justify-center group-hover:scale-110 group-hover:border-pink-400 group-hover:shadow-pink-500/30 transition-all duration-300">
                        <span class="text-xl">📸</span>
                    </div>
                    <span class="text-xs font-semibold text-amber-100 group-hover:text-pink-400 transition mt-1.5 font-serif-y2k">Instagram</span>
                </a>

                <a href="https://tiktok.com/@leapanzz" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center group">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-50/90 backdrop-blur-md border border-amber-200 shadow-md flex items-center justify-center group-hover:scale-110 group-hover:border-pink-400 group-hover:shadow-pink-500/30 transition-all duration-300">
                        <span class="text-xl">🎬</span>
                    </div>
                    <span class="text-xs font-semibold text-amber-100 group-hover:text-pink-400 transition mt-1.5 font-serif-y2k">TikTok</span>
                </a>

            </div>

            <div class="w-32 h-0.5 bg-amber-200/30 my-2"></div>

            <div class="space-y-1">
                <p class="font-serif-y2k text-xs sm:text-sm text-amber-100">
                    Designed with <span class="text-pink-400">💞</span> by Leandra Belva Varissa PN &copy; {{ date('Y') }}. All rights reserved.
                </p>
                <p class="text-[11px] text-pink-300/80 font-semibold tracking-wider">
                    ✨ A Y2K Paper Scrapbook Experience ✨
                </p>
            </div>

        </div>
    </footer>

    <!-- Script khusus untuk efek scroll navbar di HP (tanpa mengubah logika laptop) -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.getElementById("navbar");
            const logoText = document.getElementById("logo-text");
            const burgerBtn = document.getElementById("burger-btn");

            window.addEventListener("scroll", function () {
                // Hanya aktifkan jika layar berada di ukuran mobile (< 1024px)
                if (window.innerWidth < 1024) {
                    if (window.scrollY > 30) {
                        // Saat di-scroll ke bawah di HP: Beri efek kaca, teks putih, portofolio kuning
                        navbar.classList.add("bg-stone-950/80", "backdrop-blur-md", "border-b", "border-stone-800/80", "shadow-lg");
                        
                        if (logoText) {
                            logoText.classList.remove("text-[#800000]");
                            logoText.classList.add("text-yellow-400");
                        }
                        
                        if (burgerBtn) {
                            burgerBtn.classList.remove("text-stone-900");
                            burgerBtn.classList.add("text-white");
                        }
                    } else {
                        // Kembali ke atas di HP: Kembalikan seperti semula
                        navbar.classList.remove("bg-stone-950/80", "backdrop-blur-md", "border-b", "border-stone-800/80", "shadow-lg");
                        
                        if (logoText) {
                            logoText.classList.remove("text-yellow-400");
                            logoText.classList.add("text-[#800000]");
                        }
                        
                        if (burgerBtn) {
                            burgerBtn.classList.remove("text-white");
                            burgerBtn.classList.add("text-stone-900");
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>