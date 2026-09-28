<section id="home" class="relative min-h-screen flex items-center justify-center pt-24 pb-16 px-6 overflow-hidden">
    <img src="{{ asset('assets/background_paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0">

    <div class="absolute inset-0 bg-white/20 backdrop-blur-[1px] z-0"></div>

    <div class="max-w-6xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
        <div class="lg:col-span-7 space-y-6 text-gray-900">

            <div class="opacity-0 animate-fade-up">
                <span class="inline-block px-4 py-1.5 rounded-full border border-gray-800/30 bg-white/50 backdrop-blur-sm text-xs font-semibold text-gray-800">
                    Computer Science Undergraduate Student
                </span>
            </div>

            <h1 class="opacity-0 animate-fade-up delay-100 font-serif-y2k text-4xl sm:text-6xl font-extrabold text-gray-900 leading-tight">
                <span class="inline-block animate-float-title">
                    Hi, I'm <span class="text-pink-500 underline decoration-pink-400 decoration-wavy">Leandra Belva Varissa Perwira Negara</span>
                </span>
            </h1>

            <p class="opacity-0 animate-fade-up delay-200 text-gray-800 text-base sm:text-lg leading-relaxed max-w-xl font-medium">
                I am a Computer Science undergraduate at BINUS University with a strong interest in Big Data Processing and Analytics, Data Engineering, Backend Development, and Database Technology. I am seeking to gain experience and knowledge to broaden my skills through organizational and real world projects, while continuously improving my technical capabilities to work well in a team.
            </p>

            <div class="opacity-0 animate-fade-up delay-300 flex flex-wrap gap-4 pt-2">
                <a href="{{ asset('assets/CV_Leandra Belva Varissa PN_Semester 5.pdf') }}" target="_blank" 
                   class="px-6 py-3 rounded-full bg-stone-900 hover:bg-stone-800 text-amber-100 font-semibold text-sm shadow-lg transition transform hover:-translate-y-0.5">
                    View CV 📄
                </a>
                <a href="#about" 
                   class="px-6 py-3 rounded-full bg-white/90 hover:bg-white text-gray-900 border border-gray-300 font-semibold text-sm shadow-sm transition">
                    Explore More 🌸
                </a>
            </div>

            <div class="opacity-0 animate-fade-up delay-400 pt-2 flex flex-wrap items-center gap-3">
                
                <a href="https://wa.me/6285293362615" target="_blank" title="WhatsApp"
                   class="p-2.5 bg-white/80 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-md transform -rotate-3 hover:rotate-0 hover:-translate-y-1 hover:border-pink-300 hover:shadow-lg transition duration-200">
                    <img src="{{ asset('assets/whatsapp.png') }}" alt="WhatsApp" class="w-6 h-6 object-contain">
                </a>

                <a href="https://instagram.com/leandrabelva" target="_blank" title="Instagram"
                   class="p-2.5 bg-white/80 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-md transform -rotate-2 hover:rotate-0 hover:-translate-y-1 hover:border-pink-300 hover:shadow-lg transition duration-200">
                    <img src="{{ asset('assets/instagram.png') }}" alt="Instagram" class="w-6 h-6 object-contain">
                </a>

                <a href="https://tiktok.com/@leapanzz" target="_blank" title="TikTok"
                   class="p-2.5 bg-white/80 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-md transform rotate-2 hover:rotate-0 hover:-translate-y-1 hover:border-pink-300 hover:shadow-lg transition duration-200">
                    <img src="{{ asset('assets/tiktok.png') }}" alt="TikTok" class="w-6 h-6 object-contain">
                </a>

                <a href="https://github.com/leandrabelva" target="_blank" title="GitHub"
                   class="p-2.5 bg-white/80 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-md transform rotate-3 hover:rotate-0 hover:-translate-y-1 hover:border-pink-300 hover:shadow-lg transition duration-200">
                    <img src="{{ asset('assets/github.png') }}" alt="GitHub" class="w-6 h-6 object-contain">
                </a>

                <a href="https://www.linkedin.com/in/leandra-belva-varissa-perwira-negara-66055b325/" target="_blank" title="LinkedIn"
                   class="p-2.5 bg-white/80 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-md transform -rotate-1 hover:rotate-0 hover:-translate-y-1 hover:border-pink-300 hover:shadow-lg transition duration-200">
                    <img src="{{ asset('assets/linkedin.png') }}" alt="LinkedIn" class="w-6 h-6 object-contain">
                </a>

            </div>

        </div>

        <div class="opacity-0 animate-fade-up delay-400 lg:col-span-5 flex justify-center">
            <div class="animate-float relative p-3 bg-white/90 rounded-3xl shadow-2xl border border-stone-200 transition duration-300 max-w-sm">
                <img src="{{ asset('assets/Foto Hero_edit.jpeg') }}" alt="Foto Belva" class="rounded-2xl object-cover w-full h-80">
            </div>
        </div>
    </div>
</section>