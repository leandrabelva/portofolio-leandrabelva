<header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-4 px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        
        <!-- Logo dan Teks: Di HP menjadi kolom ke bawah (flex-col), di layar besar (lg) menjadi baris menyamping (lg:flex-row) -->
        <a href="#home" class="flex flex-col lg:flex-row lg:items-center gap-1 lg:gap-3 group">
            <img src="{{ asset('assets/Logo Lean Baru.png') }}" alt="Logo LEAN" class="h-12 lg:h-15 w-auto object-contain">
            <span id="logo-text" class="font-serif-y2k text-lg lg:text-2xl font-bold tracking-wide text-[#800000] group-hover:text-pink-400 transition-colors duration-300">
                PORTOFOLIO
            </span>
        </a>

        <nav id="nav-links" class="hidden lg:flex items-center space-x-6 text-sm font-semibold tracking-wide text-stone-900 transition-colors duration-300">
            <a href="#home" class="nav-item transition-colors duration-300 hover:text-pink-500">Home</a>
            <a href="#about" class="nav-item transition-colors duration-300 hover:text-pink-500">About</a>
            <a href="#education" class="nav-item transition-colors duration-300 hover:text-pink-500">Education</a>
            <a href="#projects" class="nav-item transition-colors duration-300 hover:text-pink-500">Projects</a>
            <a href="#certification" class="nav-item transition-colors duration-300 hover:text-pink-500">Certification</a>
            <a href="#organizations" class="nav-item transition-colors duration-300 hover:text-pink-500">Organizations</a>
            <a href="#skills" class="nav-item transition-colors duration-300 hover:text-pink-500">Skills</a>
            <a href="#contact" class="nav-item transition-colors duration-300 hover:text-pink-500">Contact</a>
        </nav>

        <button id="burger-btn" class="lg:hidden text-stone-900 focus:outline-none p-2 transition-colors duration-300">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden bg-stone-950/80 backdrop-blur-xl border-b border-stone-800/80 px-6 py-6 mt-3 rounded-2xl space-y-4 text-center shadow-2xl transition-all duration-300">
        <a href="#home" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Home</a>
        <a href="#about" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">About</a>
        <a href="#education" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Education</a>
        <a href="#projects" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Projects</a>
        <a href="#certification" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Certification</a>
        <a href="#organizations" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Organizations</a>
        <a href="#skills" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Skills</a>
        <a href="#contact" class="mobile-nav-item block text-stone-300 hover:text-pink-400 font-semibold text-base transition-colors duration-200 py-1">Contact</a>
    </div>
</header>