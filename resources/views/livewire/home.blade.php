<div>
    <!-- Hero Section with Full Screen Video -->
    <section id="home" class="relative text-white overflow-hidden min-h-screen flex items-center" x-data="{videoLoaded: false}">
        <!-- Loading State -->
        <div x-show="!videoLoaded" class="absolute inset-0 bg-gradient-to-br from-green-950 via-green-900 to-green-800">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-white mb-4"></div>
                    <p class="text-white/80 text-sm">Loading...</p>
                </div>
            </div>
        </div>
        
        <!-- Full Screen Video Background -->
        <video
            x-init="$el.addEventListener('loadeddata', () => videoLoaded = true)"
            class="absolute inset-0 w-full h-full object-cover"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            poster="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=1920&h=1080&fit=crop&q=80"
            loading="lazy"
            x-ref="heroVideo">
            <source src="{{ asset('vid2025-12-13 at 6.48.08 AM.mp4') }}" type="video/mp4">
        </video>

        <!-- Enhanced Gradient Overlays for Text Readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/40"></div>

        <!-- Content -->
        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="max-w-4xl">
                <!-- Text Content -->
                <div x-data="{show:false}" x-init="setTimeout(()=>show=true,150)" class="text-center lg:text-left">
                    <span x-show="show" x-transition
                        class="inline-block mb-6 px-5 py-2 text-xs sm:text-sm font-medium tracking-wide bg-white/15 backdrop-blur-sm rounded-full border border-white/20 shadow-lg">
                        <span class="mr-2">♻</span> Zero Waste Movement
                    </span>

                    <h1 x-show="show" x-transition.duration.700ms
                        class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight mb-6">
                        Clean Today.<br>
                        Sustainable Tomorrow.
                    </h1>

                    <p x-show="show" x-transition.delay.200ms
                        class="text-base sm:text-lg lg:text-xl text-gray-200 max-w-2xl mx-auto lg:mx-0 mb-10 leading-relaxed">
                        Building responsible communities through waste segregation,
                        recycling innovation, and public participation.
                    </p>

                    <div x-show="show" x-transition.delay.300ms class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#"
                            class="group bg-white text-green-900 px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 text-center">
                            <span class="inline-flex items-center">
                                Join the Movement
                                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="#"
                            class="border-2 border-white/60 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm text-center">
                            Support Our Work
                        </a>
                    </div>

                    <!-- Stats -->
                    <div x-show="show" x-transition.delay.400ms class="grid grid-cols-3 gap-6 mt-12 pt-12 border-t border-white/20">
                        <div class="text-center lg:text-left">
                            <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1">500+</div>
                            <div class="text-xs sm:text-sm text-gray-300">Communities</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1">10K+</div>
                            <div class="text-xs sm:text-sm text-gray-300">SS Bins Installed</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-1">95%</div>
                            <div class="text-xs sm:text-sm text-gray-300">Waste Segregated</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce hidden lg:block z-10">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>
    <!-- Our Goals Section -->
    <section id="programs" class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
            x-data="{visible:false}" x-intersect="visible=true">

            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 lg:mb-20">
                <span
                    x-show="visible"
                    x-transition
                    class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-green-100 text-green-800 shadow-sm"
                >
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                    </svg>
                    Our Purpose
                </span>

                <h2
                    x-show="visible"
                    x-transition.delay.100ms
                    class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6"
                >
                    Our Goal
                </h2>

                <p
                    x-show="visible"
                    x-transition.delay.200ms
                    class="text-base sm:text-lg lg:text-xl text-gray-600 leading-relaxed"
                >
                    To create a cleaner, healthier India by eliminating unsafe waste practices
                    and empowering every citizen to participate in responsible waste management.
                </p>
            </div>

            <!-- Goals Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- Goal 1 -->
                <div
                    x-show="visible"
                    x-transition.delay.300ms
                    class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100"
                >
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        ♻
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">End Manual Scavenging</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Replace unsafe waste handling with hygienic and dignified systems.
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <span class="text-sm text-green-700 font-medium group-hover:underline">Learn more →</span>
                    </div>
                </div>

                <!-- Goal 2 -->
                <div
                    x-show="visible"
                    x-transition.delay.400ms
                    class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100"
                >
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        🗑
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Waste Segregation at Source</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Promote dry and wet waste separation in homes and public spaces.
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <span class="text-sm text-green-700 font-medium group-hover:underline">Learn more →</span>
                    </div>
                </div>

                <!-- Goal 3 -->
                <div
                    x-show="visible"
                    x-transition.delay.500ms
                    class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100"
                >
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        🏫
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Community Awareness</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Educate schools, institutions, and citizens on sustainable habits.
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <span class="text-sm text-green-700 font-medium group-hover:underline">Learn more →</span>
                    </div>
                </div>

                <!-- Goal 4 -->
                <div
                    x-show="visible"
                    x-transition.delay.600ms
                    class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100"
                >
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        🌱
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Plastic-Free Future</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Encourage eco-friendly alternatives like stainless steel bins.
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <span class="text-sm text-green-700 font-medium group-hover:underline">Learn more →</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section id="about" class="py-20 sm:py-24 lg:py-32 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-transparent opacity-50"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center"
                x-data="{visible:false}" x-intersect="visible=true">

                <!-- Content -->
                <div x-show="visible" x-transition class="order-2 lg:order-1">
                    <span class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-green-100 text-green-800 shadow-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        Founder's Journey
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                        Ajay Mehra
                    </h2>
                    <div class="flex items-center gap-3 mb-8">
                        <div class="h-1 w-12 bg-green-600 rounded"></div>
                        <span class="text-base sm:text-lg font-medium text-green-700">
                            Social Reformer & Entrepreneur
                        </span>
                    </div>

                    <div class="space-y-6 text-gray-700 leading-relaxed text-sm sm:text-base lg:text-lg">
                        <p class="flex gap-3">
                            <span class="text-green-600 text-xl flex-shrink-0">•</span>
                            <span>
                                Ajay Mehra has devoted his life to transforming the vision of
                                <strong class="text-gray-900">Swachhata (Cleanliness)</strong> through innovation and inclusion,
                                uplifting marginalized communities across India.
                            </span>
                        </p>

                        <p class="flex gap-3">
                            <span class="text-green-600 text-xl flex-shrink-0">•</span>
                            <span>
                                Witnessing the harsh realities of manual scavenging and inadequate
                                sanitation infrastructure inspired him to act beyond awareness —
                                towards sustainable solutions.
                            </span>
                        </p>

                        <p class="flex gap-3">
                            <span class="text-green-600 text-xl flex-shrink-0">•</span>
                            <span>
                                Through impactful films and campaigns aligned with
                                <strong class="text-gray-900">Solid Waste Management (SWM) Rules</strong>, he strengthened
                                <strong class="text-gray-900">Janbhagidari</strong> by engaging citizens in waste segregation.
                            </span>
                        </p>

                        <div class="bg-green-50 border-l-4 border-green-600 p-6 rounded-r-xl mt-8">
                            <p class="flex gap-3 items-start">
                                <span class="text-2xl flex-shrink-0">🎯</span>
                                <span>
                                    This mission gave birth to
                                    <strong class="text-green-800">SS Bin</strong> — stainless steel,
                                    dual-compartment bins that replace plastic and enable effective
                                    dry & wet waste segregation nationwide.
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-8">
                        <a href="/Swachhta-Scavenger.pdf" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-green-700 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Read Full Story
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Visual -->
                <div x-show="visible" x-transition.delay.200ms class="relative order-1 lg:order-2">
                    <!-- Decorative Frame -->
                    <div class="absolute -top-6 -left-6 w-full h-full border-2 border-green-600 rounded-3xl hidden sm:block"></div>
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-gradient-to-br from-green-100 to-green-200 rounded-3xl hidden sm:block"></div>

                    <div class="relative">
                        <img
                            src="https://images.unsplash.com/photo-1521791055366-0d553872125f?w=800&h=600&fit=crop"
                            alt="Ajay Mehra"
                            class="relative rounded-3xl shadow-2xl object-cover w-full h-[400px] sm:h-[500px] lg:h-[600px] ring-4 ring-white" />

                        <!-- Floating Badge -->
                        <div class="absolute bottom-6 left-6 right-6 sm:left-8 bg-gradient-to-r from-green-900 to-green-800 text-white px-6 py-4 rounded-2xl shadow-2xl backdrop-blur-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="text-3xl">♻</div>
                                    <div>
                                        <div class="font-bold text-base sm:text-lg">SS Bin Initiative</div>
                                        <div class="text-xs sm:text-sm text-green-200">Making India Cleaner</div>
                                    </div>
                                </div>
                                <div class="hidden sm:block text-right">
                                    <div class="text-2xl font-bold">10K+</div>
                                    <div class="text-xs text-green-200">Bins Deployed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swachhta's Scavenger Section -->
    <section id="scavenger-story" class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{visible:false}" x-intersect="visible=true">
            
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 lg:mb-20">
                <span x-show="visible" x-transition class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-orange-100 text-orange-800 shadow-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    A Story of Dignity & Change
                </span>

                <h2 x-show="visible" x-transition.delay.100ms class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Swachhta's Scavenger
                </h2>

                <p x-show="visible" x-transition.delay.200ms class="text-base sm:text-lg lg:text-xl text-gray-600 leading-relaxed">
                    The untold story of India's unsung heroes fighting for dignity, health, and a cleaner tomorrow.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                <!-- Image/Visual -->
                <div x-show="visible" x-transition.delay.300ms class="relative order-1 lg:order-1">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-orange-400 to-red-500 rounded-3xl opacity-20 group-hover:opacity-30 transition-opacity blur-lg"></div>
                        <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?w=800&h=600&fit=crop" 
                             alt="Waste Workers" 
                             class="relative rounded-3xl shadow-2xl object-cover w-full h-[400px] sm:h-[500px] ring-4 ring-white" />
                    </div>
                </div>

                <!-- Content -->
                <div x-show="visible" x-transition.delay.400ms class="order-2 lg:order-2">
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6">Breaking the Chains of Manual Scavenging</h3>
                    
                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <p class="text-base sm:text-lg">
                            In the shadows of India's sanitation system lie thousands of workers who risk their lives daily, 
                            handling waste with bare hands in the most inhumane conditions.
                        </p>
                        
                        <p class="text-base sm:text-lg">
                            <strong class="text-gray-900">Swachhta's Scavenger</strong> is more than a documentary—it's a call to action. 
                            It reveals the harsh reality of manual scavenging, a practice that persists despite being legally banned.
                        </p>
                        
                        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 rounded-r-xl mt-6">
                            <p class="flex gap-3 items-start">
                                <span class="text-2xl flex-shrink-0">⚠️</span>
                                <span class="text-base sm:text-lg">
                                    Every year, lives are lost in septic tanks and sewers. Our mission is to end this 
                                    tragedy through technology, education, and systemic change.
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="/Swachhta-Scavenger.pdf" target="_blank" class="inline-flex items-center justify-center gap-2 bg-orange-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-orange-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Read the Story
                        </a>
                        <a href="#" class="inline-flex items-center justify-center gap-2 border-2 border-orange-600 text-orange-600 px-8 py-4 rounded-xl font-semibold hover:bg-orange-50 transition-all duration-300">
                            Watch Documentary
                        </a>
                    </div>
                </div>
            </div>

            <!-- Key Issues Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Issue 1 -->
                <div x-show="visible" x-transition.delay.500ms class="bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-3xl mb-5">
                        ☠️
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Health Hazards</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Workers face deadly infections, respiratory diseases, and toxic exposure without protective equipment.
                    </p>
                </div>

                <!-- Issue 2 -->
                <div x-show="visible" x-transition.delay.600ms class="bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl mb-5">
                        🚫
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Social Stigma</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Deep-rooted caste discrimination forces families into this occupation across generations.
                    </p>
                </div>

                <!-- Issue 3 -->
                <div x-show="visible" x-transition.delay.700ms class="bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-3xl mb-5">
                        ⚙️
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Lack of Technology</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Modern equipment and safe practices remain unavailable to those who need them most.
                    </p>
                </div>
            </div>

            <!-- Call to Action -->
            <div x-show="visible" x-transition.delay.800ms class="mt-16 text-center bg-gradient-to-r from-orange-600 to-red-600 text-white rounded-3xl p-8 lg:p-12 shadow-2xl">
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">Join the Movement for Change</h3>
                <p class="text-base sm:text-lg text-orange-100 max-w-2xl mx-auto mb-8">
                    Together, we can eliminate manual scavenging and restore dignity to thousands of workers across India.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg">
                        Support This Cause
                    </a>
                    <a href="#" class="inline-flex items-center justify-center gap-2 border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition-all duration-300">
                        Volunteer With Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Innovations & Recognition Section -->
    <section id="innovations" class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{visible:false}" x-intersect="visible=true">
            
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 lg:mb-20">
                <span x-show="visible" x-transition class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-green-100 text-green-800 shadow-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    Leading Innovation
                </span>

                <h2 x-show="visible" x-transition.delay.100ms class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Innovations & Recognition
                </h2>

                <p x-show="visible" x-transition.delay.200ms class="text-base sm:text-lg lg:text-xl text-gray-600 leading-relaxed">
                    By connecting cleanliness with people's mindset and recognizing the efforts of safai karamcharis, 
                    we helped create a place in the public's heart for these unsung heroes.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                
                <!-- Left Content -->
                <div x-show="visible" x-transition.delay.300ms class="space-y-6">
                    <div class="bg-white p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                                🏢
                            </div>
                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">Sheetal Group Projects</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    The Sheetal Group, along with partners, has successfully delivered ambitious initiatives 
                                    and many more projects to cities like <strong class="text-green-700">Indore</strong>, 
                                    <strong class="text-green-700">Pune</strong>, and <strong class="text-green-700">Mumbai</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 lg:p-8 rounded-2xl border-2 border-green-200">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-2xl flex-shrink-0 shadow-sm">
                                💡
                            </div>
                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">Luminflex Lights</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Innovations such as <strong class="text-green-800">Luminflex Lights</strong>—waste-powered 
                                    roadside lights—are being developed under our initiatives. Be it new technology or modern 
                                    waste disposal systems, we have made efforts that stand out.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                                🗑️
                            </div>
                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">Smart SS Bins</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Using <strong class="text-green-700">coloured SS BINs made of steel</strong>, we now 
                                    monitor cleanliness and safety through integrated camera/web technology. This idea was 
                                    highly appreciated by people.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div x-show="visible" x-transition.delay.400ms class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-br from-green-400 to-green-600 rounded-3xl opacity-20 blur-lg"></div>
                    <div class="relative bg-gradient-to-br from-green-700 to-green-900 p-8 lg:p-10 rounded-3xl shadow-2xl text-white">
                        <div class="mb-8">
                            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-4">
                                <span>🏆</span>
                                Pride & Recognition
                            </div>
                            <h3 class="text-2xl lg:text-3xl font-bold mb-4">
                                As a "Chowkidar" (Guardian) of Cleanliness
                            </h3>
                            <p class="text-green-100 leading-relaxed text-base lg:text-lg">
                                I earned recognition for dedicating entire departments to the cause. This work became my 
                                medium of selfless service, now honored as a <strong class="text-white">Pride Day</strong>.
                            </p>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 gap-4 pt-8 border-t border-white/20">
                            <div class="text-center">
                                <div class="text-3xl lg:text-4xl font-bold mb-1">3+</div>
                                <div class="text-sm text-green-200">Major Cities</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl lg:text-4xl font-bold mb-1">10K+</div>
                                <div class="text-sm text-green-200">Smart Bins</div>
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="mt-8 flex items-center gap-3 bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                            <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <div>
                                <div class="font-bold">Innovation Award</div>
                                <div class="text-sm text-green-200">Smart Waste Management</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Innovation Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Innovation 1 -->
                <div x-show="visible" x-transition.delay.500ms class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        📹
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Camera Integration</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Real-time monitoring through web-enabled cameras ensuring accountability and safety.
                    </p>
                </div>

                <!-- Innovation 2 -->
                <div x-show="visible" x-transition.delay.600ms class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        ⚡
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Waste-to-Energy</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Converting waste into renewable energy through innovative Luminflex technology.
                    </p>
                </div>

                <!-- Innovation 3 -->
                <div x-show="visible" x-transition.delay.700ms class="group bg-white p-6 lg:p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300">
                        🛡️
                    </div>
                    <h3 class="text-lg lg:text-xl font-bold text-gray-900 mb-3">Guardian System</h3>
                    <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                        Acting as "Chowkidar" with dedicated departments for systematic cleanliness management.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Building the Movement Section -->
    <section id="impact" class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-white to-green-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-96 h-96 bg-green-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-600 rounded-full filter blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{visible:false}" x-intersect="visible=true">
            
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 lg:mb-20">
                <span x-show="visible" x-transition class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-green-100 text-green-800 shadow-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Nationwide Impact
                </span>

                <h2 x-show="visible" x-transition.delay.100ms class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Building the Movement
                </h2>

                <p x-show="visible" x-transition.delay.200ms class="text-base sm:text-lg lg:text-xl text-gray-600 leading-relaxed">
                    With passion rooted deep in my heart, I continued moving forward. Through Sheetal Group, 
                    I helped ignite the flame of Swachhata in Indore.
                </p>
            </div>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-16">
                
                <!-- Left: Image/Visual -->
                <div x-show="visible" x-transition.delay.300ms class="relative order-2 lg:order-1">
                    <div class="relative group">
                        <!-- Decorative Elements -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-green-400 to-green-600 rounded-3xl opacity-20 group-hover:opacity-30 transition-opacity blur-lg"></div>
                        <div class="absolute top-0 right-0 w-32 h-32 bg-green-500 rounded-full opacity-10 animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 w-40 h-40 bg-green-600 rounded-full opacity-10 animate-pulse" style="animation-delay: 1s;"></div>
                        
                        <!-- Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl ring-4 ring-white">
                            <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&h=600&fit=crop" 
                                 alt="Community Movement" 
                                 class="w-full h-[400px] sm:h-[500px] object-cover" />
                            
                            <!-- Overlay Stats -->
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                                <div class="grid grid-cols-2 gap-4 text-white">
                                    <div>
                                        <div class="text-3xl font-bold">60M+</div>
                                        <div class="text-sm text-gray-300">People Engaged</div>
                                    </div>
                                    <div>
                                        <div class="text-3xl font-bold">5+</div>
                                        <div class="text-sm text-gray-300">Major Cities</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div x-show="visible" x-transition.delay.400ms class="order-1 lg:order-2 space-y-6">
                    
                    <!-- Partnership Card -->
                    <div class="bg-white p-6 lg:p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                                🤝
                            </div>
                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3">Strategic Collaborations</h3>
                                <p class="text-gray-700 leading-relaxed mb-3">
                                    Collaborating with volunteer organizations and the <strong class="text-green-700">Asian Development Bank (ADB)</strong>, 
                                    I was able to lead impactful projects across India.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Indore</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Shrinagar</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Mumbai</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Bhopal</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Jabalpur</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Janbhagidari Card -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 lg:p-8 rounded-2xl border-2 border-green-200">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-2xl flex-shrink-0 shadow-sm">
                                👥
                            </div>
                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3">60 Million Strong</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    To bring Swachhata into public consciousness, support from around <strong class="text-green-800">60 million people</strong> 
                                    helped create a nationwide movement. This surge of <strong class="text-green-800">Janbhagidari</strong> proved to be a milestone.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Swachh Bharat Card -->
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 lg:p-8 rounded-2xl border-2 border-orange-200">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-2xl flex-shrink-0 shadow-sm">
                                🇮🇳
                            </div>
                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3">Swachh Bharat Abhiyan</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    With <strong class="text-orange-800">Swachh Bharat Abhiyan</strong>, the campaign connected sanitation workers 
                                    across India and now stands as an inspirational model. We established a platform for Swachhata that actively engages people.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Impact Section -->
            <div x-show="visible" x-transition.delay.500ms class="bg-gradient-to-br from-green-700 to-green-900 rounded-3xl shadow-2xl p-8 lg:p-12 text-white">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div>
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
                            From Duty to Embraced Responsibility
                        </h3>
                        <p class="text-green-100 text-base lg:text-lg leading-relaxed mb-6">
                            Cleanliness is no longer just a duty—it's being embraced by citizens. We've ensured that 
                            product-based awareness reaches key urban zones and local communities.
                        </p>
                        <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm px-5 py-3 rounded-xl inline-flex">
                            <svg class="w-6 h-6 text-green-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-semibold">Certified Movement</span>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">60M+</div>
                            <div class="text-sm text-green-200">Citizens Involved</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">5+</div>
                            <div class="text-sm text-green-200">Cities Transformed</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">100%</div>
                            <div class="text-sm text-green-200">Community Reach</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">∞</div>
                            <div class="text-sm text-green-200">Lasting Impact</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div x-show="visible" x-transition.delay.600ms class="mt-16 text-center">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                    Join the Swachhata Movement Today
                </h3>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">
                    Be part of this transformative journey. Together, we can create a cleaner, healthier India.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-green-700 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Get Involved
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center gap-2 border-2 border-green-700 text-green-700 px-8 py-4 rounded-xl font-semibold hover:bg-green-50 transition-all duration-300">
                        Learn More About Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Events, Zero Waste & River Conservation Section -->
    <section id="events" class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-green-50 to-white relative overflow-hidden">
        <!-- Background Decorative Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-green-500 rounded-full filter blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{visible:false}" x-intersect="visible=true">
            
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 lg:mb-20">
                <span x-show="visible" x-transition class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-blue-100 text-blue-800 shadow-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                    Making Impact at Scale
                </span>

                <h2 x-show="visible" x-transition.delay.100ms class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Events, Zero Waste & River Conservation
                </h2>

                <p x-show="visible" x-transition.delay.200ms class="text-base sm:text-lg lg:text-xl text-gray-600 leading-relaxed">
                    A major milestone was advancing <strong class="text-green-700">Janbhagidari</strong>, 
                    turning small-scale efforts into national movements.
                </p>
            </div>

            <!-- Major Events Section -->
            <div class="mb-16">
                <div x-show="visible" x-transition.delay.300ms class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 lg:p-12 border-2 border-purple-100 shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-14 h-14 bg-purple-600 rounded-2xl flex items-center justify-center text-3xl shadow-lg">
                            🎪
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-bold text-gray-900">National Events Management</h3>
                            <p class="text-purple-700 font-medium">Maintaining Swachhata at Massive Gatherings</p>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 text-base lg:text-lg leading-relaxed mb-6">
                        During national events like <strong class="text-purple-800">Coldplay concerts (Ahmedabad & Mumbai)</strong>, 
                        <strong class="text-purple-800">Zomaland</strong>, <strong class="text-purple-800">IPL</strong>, 
                        and other massive gatherings, my team played a crucial role in maintaining Swachhata.
                    </p>

                    <!-- Events Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-3xl mb-2">🎵</div>
                            <div class="font-bold text-gray-900 text-sm">Coldplay</div>
                            <div class="text-xs text-gray-600">Ahmedabad & Mumbai</div>
                        </div>
                        <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-3xl mb-2">🍔</div>
                            <div class="font-bold text-gray-900 text-sm">Zomaland</div>
                            <div class="text-xs text-gray-600">Food Festival</div>
                        </div>
                        <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-3xl mb-2">🏏</div>
                            <div class="font-bold text-gray-900 text-sm">IPL</div>
                            <div class="text-xs text-gray-600">Cricket Matches</div>
                        </div>
                        <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-3xl mb-2">🎉</div>
                            <div class="font-bold text-gray-900 text-sm">More Events</div>
                            <div class="text-xs text-gray-600">Nationwide</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infinity Team & River Conservation Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-16">
                
                <!-- Infinity Team Card -->
                <div x-show="visible" x-transition.delay.400ms class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-br from-green-600 to-green-800 p-6 lg:p-8 text-white">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center text-2xl">
                                ♾️
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-bold">Infinity Team</h3>
                        </div>
                        <p class="text-green-100 text-base lg:text-lg">
                            Our Infinity Team consistently spread awareness about Swachhata Rules
                        </p>
                    </div>
                    
                    <div class="p-6 lg:p-8 space-y-4">
                        <!-- Segregation -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                                🗑️
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Waste Segregation</h4>
                                <p class="text-gray-600 text-sm">Focusing on dry and wet waste separation at source</p>
                            </div>
                        </div>

                        <!-- Sanitization -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                                🧼
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Sanitization & Fogging</h4>
                                <p class="text-gray-600 text-sm">Ensuring clean and hygienic public spaces</p>
                            </div>
                        </div>

                        <!-- PPE Distribution -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                                😷
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">PPE Kits & Masks</h4>
                                <p class="text-gray-600 text-sm">Distribution of protective equipment in public areas</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- River Conservation Card -->
                <div x-show="visible" x-transition.delay.500ms class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 lg:p-8 text-white">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center text-2xl">
                                🌊
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-bold">River Conservation</h3>
                        </div>
                        <p class="text-blue-100 text-base lg:text-lg">
                            Contributing meaningfully to river conservation, driven by a deep sense of belonging
                        </p>
                    </div>
                    
                    <div class="p-6 lg:p-8">
                        <!-- Clean Ganga -->
                        <div class="mb-6 pb-6 border-b border-gray-200">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center text-3xl flex-shrink-0">
                                    🙏
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Clean Ganga Campaign</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Supporting the sacred mission to restore the purity of River Ganga through 
                                        community participation and sustainable practices.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Clean Yamuna -->
                        <div>
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-green-50 rounded-xl flex items-center justify-center text-3xl flex-shrink-0">
                                    💧
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Clean Yamuna Campaign</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Active involvement in rejuvenating River Yamuna, ensuring cleaner water 
                                        and healthier ecosystems for communities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Zero Waste Movement -->
            <div x-show="visible" x-transition.delay.600ms class="bg-gradient-to-br from-green-700 to-green-900 rounded-3xl shadow-2xl p-8 lg:p-12 text-white relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-32 translate-x-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full translate-y-24 -translate-x-24"></div>
                
                <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Content -->
                    <div>
                        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-6">
                            <span>♻️</span>
                            Founded by Arti Mehra
                        </div>
                        
                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                            Zero Waste Movement
                        </h3>
                        
                        <p class="text-green-100 text-base lg:text-lg leading-relaxed mb-6">
                            The <strong class="text-white">Zero Waste movement</strong>, founded by my wife 
                            <strong class="text-white">Arti Mehra</strong>, was established to promote waste-free lifestyles.
                        </p>
                        
                        <p class="text-green-100 text-base lg:text-lg leading-relaxed mb-8">
                            Through teamwork and awareness films, we ensured Zero Waste became part of public consciousness.
                        </p>

                        <!-- CTA -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#" class="inline-flex items-center justify-center gap-2 bg-white text-green-800 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg">
                                Learn About Zero Waste
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Visual/Stats -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl mb-2">🎬</div>
                            <div class="text-2xl font-bold mb-1">Films</div>
                            <div class="text-sm text-green-200">Awareness Content</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl mb-2">👥</div>
                            <div class="text-2xl font-bold mb-1">Team</div>
                            <div class="text-sm text-green-200">Dedicated Members</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl mb-2">♻️</div>
                            <div class="text-2xl font-bold mb-1">Zero</div>
                            <div class="text-sm text-green-200">Waste Goal</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                            <div class="text-4xl mb-2">🌍</div>
                            <div class="text-2xl font-bold mb-1">Public</div>
                            <div class="text-sm text-green-200">Consciousness</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div x-show="visible" x-transition.delay.700ms class="mt-16 text-center">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                    Be Part of the Change
                </h3>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">
                    From large events to river conservation, every action counts. Join us in creating a sustainable future.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{route('about')}}" class="inline-flex items-center justify-center gap-2 bg-green-700 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Join Our Initiatives
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{route('about')}}" class="inline-flex items-center justify-center gap-2 border-2 border-green-700 text-green-700 px-8 py-4 rounded-xl font-semibold hover:bg-green-50 transition-all duration-300">
                        View Our Impact Stories
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>