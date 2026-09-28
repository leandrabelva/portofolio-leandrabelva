<section id="education" class="py-20 px-6 bg-stone-950 text-amber-50 relative overflow-hidden">
    <img src="{{ asset('assets/background_paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="absolute inset-0 bg-black/30 z-0"></div>

    <div class="max-w-6xl mx-auto space-y-8 relative z-10">
        
        <div class="flex justify-center animate-float relative p-2">
            <img src="{{ asset('assets/Education.png') }}" alt="Education" class="h-20 sm:h-35 object-contain hover:scale-105 transition drop-shadow-lg">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch pt-4">
            
            <div class="edu-card opacity-0 translate-y-10 transition-all duration-700 ease-out relative group" style="transition-delay: 100ms;">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
                    <div class="w-3 h-3 rounded-full bg-pink-400 border border-stone-800 shadow-md"></div>
                    <div class="w-0.5 h-6 bg-pink-400/50"></div>
                </div>

                <a href="https://binus.ac.id" target="_blank" rel="noopener noreferrer" class="block h-full">
                    <div class="bg-amber-50/90 backdrop-blur-md border border-amber-200/60 text-stone-900 rounded-3xl p-6 sm:p-8 h-full flex flex-col items-center text-center shadow-2xl hover:-translate-y-2 hover:shadow-pink-500/20 group-hover:border-pink-300 transition duration-300">
                        <div class="h-20 flex items-center justify-center mb-4">
                            <img src="{{ asset('assets/logo_binus.png') }}" alt="BINUS University" class="max-h-full max-w-full object-contain filter drop-shadow-md group-hover:scale-105 transition duration-300">
                        </div>

                        <h3 class="font-serif-y2k text-xl font-bold text-[#800000] mb-1 leading-snug group-hover:text-pink-600 transition-colors">
                            S1 Computer Science - BINUS University
                        </h3>
                        
                        <span class="font-serif-y2k italic text-sm text-pink-600 font-semibold mb-4 block">
                            2024 - Present
                        </span>

                        <p class="text-stone-800 text-sm leading-relaxed font-medium">
                            Currently pursuing a Bachelor's degree in Computer Science, focusing on database management, web development, and software engineering. Actively involved in various projects and extracurricular activities to enhance practical skills and knowledge in the field.
                        </p>
                    </div>
                </a>
            </div>

            <div class="edu-card opacity-0 translate-y-10 transition-all duration-700 ease-out relative group" style="transition-delay: 300ms;">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
                    <div class="w-3 h-3 rounded-full bg-pink-400 border border-stone-800 shadow-md"></div>
                    <div class="w-0.5 h-6 bg-pink-400/50"></div>
                </div>

                <a href="https://sekolahindonesia.nl" target="_blank" rel="noopener noreferrer" class="block h-full">
                    <div class="bg-amber-50/90 backdrop-blur-md border border-amber-200/60 text-stone-900 rounded-3xl p-6 sm:p-8 h-full flex flex-col items-center text-center shadow-2xl hover:-translate-y-2 hover:shadow-pink-500/20 group-hover:border-pink-300 transition duration-300">
                        <div class="h-20 flex items-center justify-center mb-4">
                            <img src="{{ asset('assets/logo SIDH.png') }}" alt="SIDH" class="max-h-full max-w-full object-contain filter drop-shadow-md group-hover:scale-105 transition duration-300">
                        </div>

                        <h3 class="font-serif-y2k text-xl font-bold text-[#800000] mb-1 leading-snug group-hover:text-pink-600 transition-colors">
                            Sekolah Indonesia Den Haag (Netherlands)
                        </h3>
                        
                        <span class="font-serif-y2k italic text-sm text-pink-600 font-semibold mb-4 block">
                            2022 - 2024
                        </span>

                        <p class="text-stone-800 text-sm leading-relaxed font-medium">
                            Completed high school education and graduated in Mathematics and Natural Sciences (MIPA) with a very good average final grade (Diploma).
                        </p>
                    </div>
                </a>
            </div>

            <div class="edu-card opacity-0 translate-y-10 transition-all duration-700 ease-out relative group" style="transition-delay: 500ms;">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
                    <div class="w-3 h-3 rounded-full bg-pink-400 border border-stone-800 shadow-md"></div>
                    <div class="w-0.5 h-6 bg-pink-400/50"></div>
                </div>

                <a href="https://cm-fsm.es/" target="_blank" rel="noopener noreferrer" class="block h-full">
                    <div class="bg-amber-50/90 backdrop-blur-md border border-amber-200/60 text-stone-900 rounded-3xl p-6 sm:p-8 h-full flex flex-col items-center text-center shadow-2xl hover:-translate-y-2 hover:shadow-pink-500/20 group-hover:border-pink-300 transition duration-300">
                        <div class="h-20 flex items-center justify-center mb-4">
                            <img src="{{ asset('assets/logo colegio madrid.png') }}" alt="High School Madrid" class="max-h-full max-w-full object-contain filter drop-shadow-md group-hover:scale-105 transition duration-300">
                        </div>

                        <h3 class="font-serif-y2k text-xl font-bold text-[#800000] mb-1 leading-snug group-hover:text-pink-600 transition-colors">
                            High School Education (Madrid)
                        </h3>
                        
                        <span class="font-serif-y2k italic text-sm text-pink-600 font-semibold mb-4 block">
                            2021 - 2022
                        </span>

                        <p class="text-stone-800 text-sm leading-relaxed font-medium">
                            Completed middle school and a year of high school education in Madrid, gaining conversational fluency in Spanish, cultural adaptability, and global perspective alongside standard academic curricula.
                        </p>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15 // Animasi akan terpicu saat card terlihat 15% di layar
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Menambahkan kelas untuk memunculkan card dengan lembut
                entry.target.classList.remove('opacity-0', 'translate-y-10');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                observer.unobserve(entry.target); // Berhenti mengamati setelah animasi berjalan sekali
            }
        });
    }, observerOptions);

    document.querySelectorAll('.edu-card').forEach(card => {
        observer.observe(card);
    });
});
</script>