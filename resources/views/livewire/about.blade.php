<div>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-green-950 via-green-900 to-green-800 text-white overflow-hidden py-20 lg:py-32">
        <!-- Animated Background Shapes -->
        <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 -left-40 w-[500px] h-[500px] bg-green-400/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{show:false}" x-init="setTimeout(()=>show=true,150)">
            <div class="text-center max-w-4xl mx-auto">
                <span x-show="show" x-transition class="inline-block mb-6 px-5 py-2 text-sm font-medium tracking-wide bg-white/15 backdrop-blur-sm rounded-full border border-white/20 shadow-lg">
                    About Us
                </span>

                <h1 x-show="show" x-transition.delay.100ms class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight mb-6">
                    AJAY MEHRA
                </h1>

                <p x-show="show" x-transition.delay.200ms class="text-xl sm:text-2xl lg:text-3xl text-green-100 mb-4">
                    Swachhta's Scavenger
                </p>

                <div x-show="show" x-transition.delay.300ms class="mt-8 p-8 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
                        LET US JOIN TOGETHER & CREATE
                    </h2>
                    <p class="text-xl sm:text-2xl text-green-200 font-semibold">
                        CLEANER, GREENER & HEALTHIER LIVING
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-20 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center" x-data="{visible:false}" x-intersect="visible=true">
                
                <!-- Profile Image -->
                <div x-show="visible" x-transition class="relative order-1 lg:order-1">
                    <div class="absolute -top-6 -left-6 w-full h-full border-2 border-green-600 rounded-3xl"></div>
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-gradient-to-br from-green-100 to-green-200 rounded-3xl"></div>
                    
                    <div class="relative">
                        <img src="/Gemini_Generated_Image_q0pho1q0pho1q0ph.png" 
                             alt="Ajay Mehra" 
                             class="relative rounded-3xl shadow-2xl object-cover w-full h-[500px] lg:h-[600px] ring-4 ring-white" />
                        
                        <!-- Badge -->
                        <div class="absolute bottom-6 left-6 right-6 bg-gradient-to-r from-green-900 to-green-800 text-white px-6 py-4 rounded-2xl shadow-2xl backdrop-blur-sm">
                            <div class="text-center">
                                <div class="text-2xl font-bold mb-1">SWM Consultant & Director</div>
                                <div class="text-sm text-green-200">Creating Sustainable Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Details -->
                <div x-show="visible" x-transition.delay.200ms class="order-2 lg:order-2">
                    <span class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-green-100 text-green-800 shadow-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        Professional Profile
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        AJAY MEHRA
                    </h2>

                    <div class="space-y-6 text-gray-700">
                        <!-- Role -->
                        <div class="bg-green-50 border-l-4 border-green-600 p-6 rounded-r-xl">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Professional Role</h3>
                            <p class="text-base leading-relaxed">
                                <strong class="text-green-800">SWM Consultant / Promoter, Director, Chairman & Project Head</strong>
                            </p>
                        </div>

                        <!-- Personal Details -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-2xl">🎂</span>
                                    <h4 class="font-bold text-gray-900">Born</h4>
                                </div>
                                <p class="text-gray-600">2 March 1964</p>
                                <p class="text-sm text-green-700">Indore (M.P.)</p>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-2xl">🎓</span>
                                    <h4 class="font-bold text-gray-900">Education</h4>
                                </div>
                                <p class="text-gray-600 font-semibold">M.Sc (Chemistry)</p>
                                <p class="text-sm text-green-700">Holkar Science College</p>
                                <p class="text-xs text-gray-500">(Devi Ahilya University)</p>
                            </div>
                        </div>

                        <!-- Family Background -->
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <span class="text-xl flex-shrink-0">👨‍🏫</span>
                                <div>
                                    <p class="text-base">
                                        <strong class="text-gray-900">Father:</strong> Eminent Writer & Prof. Late R.R. Mehra
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-xl flex-shrink-0">👩‍🏫</span>
                                <div>
                                    <p class="text-base">
                                        <strong class="text-gray-900">Mother:</strong> Sanchalika – Saraswati School Late Smt Rajmohini Mehra
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="bg-gradient-to-r from-green-600 to-green-700 text-white p-6 rounded-xl shadow-lg">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-green-100">Contact</p>
                                    <p class="text-xl font-bold">7016916505</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizations Section -->
    <section class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{visible:false}" x-intersect="visible=true">
            
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16 lg:mb-20">
                <span x-show="visible" x-transition class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-green-100 text-green-800 shadow-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                    </svg>
                    Organizations & Leadership
                </span>

                <h2 x-show="visible" x-transition.delay.100ms class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Leadership Roles
                </h2>

                <p x-show="visible" x-transition.delay.200ms class="text-base sm:text-lg text-gray-600 leading-relaxed">
                    Driving innovation and change across multiple organizations dedicated to environmental sustainability.
                </p>
            </div>

            <!-- Organizations Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 mb-16">
                <!-- Promoter -->
                <div x-show="visible" x-transition.delay.300ms class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-2 border-green-100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl">
                            🚀
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Promoter</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-3">
                            <span class="text-green-600 mt-1">✓</span>
                            <span class="text-base">Zero Waste Intech</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-600 mt-1">✓</span>
                            <span class="text-base">Infinity Management & Zero Tolerance</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-600 mt-1">✓</span>
                            <span class="text-base">Gold Star Media</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-600 mt-1">✓</span>
                            <span class="text-base">Cleanaly.Com</span>
                        </li>
                    </ul>
                </div>

                <!-- Chairman & Project Head -->
                <div x-show="visible" x-transition.delay.400ms class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border-2 border-green-100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl">
                            👔
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Leadership</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-green-50 p-4 rounded-xl">
                            <p class="text-sm text-green-700 font-semibold mb-1">Chairman</p>
                            <p class="text-lg font-bold text-gray-900">Swachh SeVa Foundation</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl">
                            <p class="text-sm text-green-700 font-semibold mb-1">Project Head</p>
                            <p class="text-lg font-bold text-gray-900">Sheetal Group</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Political Affiliation -->
            <div x-show="visible" x-transition.delay.500ms class="bg-gradient-to-r from-orange-500 to-orange-600 text-white p-8 lg:p-12 rounded-3xl shadow-2xl text-center">
                <div class="max-w-2xl mx-auto">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-4xl mx-auto mb-6">
                        🏛️
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold mb-4">Political Association</h3>
                    <p class="text-xl text-orange-100 mb-6">Member of Bharatiya Janata Party (BJP)</p>
                    <p class="text-base text-orange-100">
                        Committed to serving the nation through sustainable development and environmental initiatives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 sm:py-24 lg:py-32 bg-gradient-to-br from-green-900 to-green-800 text-white relative overflow-hidden">
        <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -left-40 w-[500px] h-[500px] bg-green-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{visible:false}" x-intersect="visible=true">
            <div class="text-center max-w-4xl mx-auto">
                <h2 x-show="visible" x-transition class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-8">
                    Our Mission
                </h2>
                
                <div x-show="visible" x-transition.delay.200ms class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20">
                        <div class="text-5xl mb-4">♻️</div>
                        <h3 class="text-xl font-bold mb-3">Zero Waste</h3>
                        <p class="text-green-100">Creating sustainable waste management solutions for a cleaner future.</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20">
                        <div class="text-5xl mb-4">🌱</div>
                        <h3 class="text-xl font-bold mb-3">Green Living</h3>
                        <p class="text-green-100">Promoting eco-friendly practices and environmental consciousness.</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20">
                        <div class="text-5xl mb-4">💚</div>
                        <h3 class="text-xl font-bold mb-3">Healthy Communities</h3>
                        <p class="text-green-100">Building healthier communities through proper sanitation and hygiene.</p>
                    </div>
                </div>

                <div x-show="visible" x-transition.delay.400ms class="mt-12">
                    <a href="#" class="inline-flex items-center gap-2 bg-white text-green-900 px-8 py-4 rounded-xl font-semibold hover:bg-green-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Join Our Mission
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
