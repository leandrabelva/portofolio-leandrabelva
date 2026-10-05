<header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-4 px-6">

    <div class="max-w-7xl mx-auto flex items-center justify-between">

       

        <a href="#home" class="flex items-center gap-3 group">

            <img src="{{ asset('assets/Logo Lean Baru.png') }}" alt="Logo LEAN" class="h-15 w-auto object-contain">

            <span id="logo-text" class="font-serif-y2k text-2xl font-bold tracking-wide text-[#800000] group-hover:text-pink-400 transition-colors duration-300">

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



<script>

    document.addEventListener('DOMContentLoaded', () => {

        const navbar = document.getElementById('navbar');

        const navLinksContainer = document.getElementById('nav-links');

        const logoText = document.getElementById('logo-text');

        const burgerBtn = document.getElementById('burger-btn');

        const mobileMenu = document.getElementById('mobile-menu');



        const navItems = document.querySelectorAll('.nav-item');

        const mobileNavItems = document.querySelectorAll('.mobile-nav-item');

        const sections = document.querySelectorAll('section[id]');



        window.addEventListener('scroll', () => {

            if (window.scrollY > 40) {

                navbar.classList.add('bg-black/40', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-white/10');

                navbar.classList.remove('py-4');

                navbar.classList.add('py-3');



                navLinksContainer.classList.remove('text-stone-900');

                navLinksContainer.classList.add('text-white');



                logoText.classList.remove('text-[#800000]');

                logoText.classList.add('text-amber-100');



                burgerBtn.classList.remove('text-stone-900');

                burgerBtn.classList.add('text-white');

            } else {

                navbar.classList.remove('bg-black/40', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-white/10');

                navbar.classList.remove('py-3');

                navbar.classList.add('py-4');



                navLinksContainer.classList.remove('text-white');

                navLinksContainer.classList.add('text-stone-900');



                logoText.classList.remove('text-amber-100');

                logoText.classList.add('text-[#800000]');



                burgerBtn.classList.remove('text-white');

                burgerBtn.classList.add('text-stone-900');

            }

        });



        const observerOptions = {

            root: null,

            rootMargin: '-20% 0px -60% 0px',

            threshold: 0

        };



        const observer = new IntersectionObserver((entries) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    const activeId = entry.target.getAttribute('id');



                    navItems.forEach(link => {

                        if (link.getAttribute('href') === `#${activeId}`) {

                            link.classList.add('text-pink-500', 'font-bold');

                        } else {

                            link.classList.remove('text-pink-500', 'font-bold');

                        }

                    });



                    mobileNavItems.forEach(link => {

                        if (link.getAttribute('href') === `#${activeId}`) {

                            link.classList.add('text-pink-400', 'font-bold', 'scale-105');

                            link.classList.remove('text-stone-300');

                        } else {

                            link.classList.remove('text-pink-400', 'font-bold', 'scale-105');

                            link.classList.add('text-stone-300');

                        }

                    });

                }

            });

        }, observerOptions);



        sections.forEach(section => observer.observe(section));



        burgerBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });



        mobileNavItems.forEach(item => {

            item.addEventListener('click', () => {

                mobileMenu.classList.add('hidden');

            });

        });

    });

</script> 

