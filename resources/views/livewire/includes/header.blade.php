<header
    x-data="{ open:false, scrolled:false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
    :class="scrolled ? 'bg-white/90 backdrop-blur shadow-sm' : 'bg-transparent'"
    class="fixed top-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <!-- Logo -->
        <div class="flex items-center gap-3 transition-all duration-300">
            <img
                src="logo.png"
                alt="Zero Waste NGO Logo"
                class="h-10 md:h-12 w-auto object-contain transition-all duration-300"
                :class="scrolled ? 'h-10' : 'h-12'" />
        </div>


        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8 font-medium transition-colors">

            <a wire:navigate href="{{ route('home') }}"
                :class="scrolled ? 'text-gray-700 hover:text-green-700' : 'text-white hover:text-green-200'">
                Home
            </a>

           

            <a wire:navigate href="#programs"
                :class="scrolled ? 'text-gray-700 hover:text-green-700' : 'text-white hover:text-green-200'">
                Programs
            </a>

            <a href="#scavenger-story"
                :class="scrolled ? 'text-gray-700 hover:text-green-700' : 'text-white hover:text-green-200'">
                Scavenger Story
            </a>

            <a href="#impact"
                :class="scrolled ? 'text-gray-700 hover:text-green-700' : 'text-white hover:text-green-200'">
                Impact
            </a>

            <a href="#events"
                :class="scrolled ? 'text-gray-700 hover:text-green-700' : 'text-white hover:text-green-200'">
                Events
            </a>

            <!-- About -->
            <a href="{{ route('about') }}"
                :class="scrolled
          ? 'bg-green-700 text-white hover:bg-green-800'
          : 'bg-white text-green-800 hover:bg-green-100'"
                class="ml-4 px-5 py-2 rounded-lg font-semibold transition">
                About
            </a>
        </nav>

        <!-- Mobile Hamburger -->
        <button
            @click="open = !open"
            class="md:hidden relative w-8 h-8 focus:outline-none"
            aria-label="Toggle Menu">
            <span
                :class="open ? 'rotate-45 translate-y-2.5' : ''"
                class="absolute left-0 top-1 w-full h-0.5 bg-current transition transform"
                :style="scrolled ? 'color:#374151' : 'color:white'"></span>

            <span
                :class="open ? 'opacity-0' : ''"
                class="absolute left-0 top-3.5 w-full h-0.5 bg-current transition"
                :style="scrolled ? 'color:#374151' : 'color:white'"></span>

            <span
                :class="open ? '-rotate-45 -translate-y-2.5' : ''"
                class="absolute left-0 top-6 w-full h-0.5 bg-current transition transform"
                :style="scrolled ? 'color:#374151' : 'color:white'"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div
        x-show="open"
        x-transition.opacity.duration.300ms
        x-cloak
        class="md:hidden bg-white border-t shadow-lg">
        <div class="px-6 py-6 space-y-4 font-medium text-gray-700">
            <a wire:navigate href="{{ route('home') }}" class="block hover:text-green-700" @click="open = false">Home</a>
            <a wire:navigate href="{{ route('about') }}" class="block hover:text-green-700" @click="open = false">About</a>
            <a href="#programs" class="block hover:text-green-700" @click="open = false">Programs</a>
            <a href="#scavenger-story" class="block hover:text-green-700" @click="open = false">Scavenger Story</a>
            <a href="#impact" class="block hover:text-green-700" @click="open = false">Impact</a>
            <a href="#events" class="block hover:text-green-700" @click="open = false">Events</a>

            <a href="#"
                class="block text-center bg-green-700 text-white py-3 rounded-lg font-semibold">
                Donate
            </a>
        </div>
    </div>
</header>