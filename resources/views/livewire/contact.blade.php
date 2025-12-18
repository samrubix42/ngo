<div>
    <!-- Contact Hero Section -->
    <section class="relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 text-white py-20 sm:py-24 lg:py-32 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto" x-data="{show:false}" x-init="setTimeout(()=>show=true,100)">
                <span x-show="show" x-transition class="inline-flex items-center gap-2 mb-6 px-5 py-2 text-sm font-medium rounded-full bg-white/20 backdrop-blur-sm border border-white/30">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Get In Touch
                </span>

                <h1 x-show="show" x-transition.delay.100ms class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
                    Contact Us
                </h1>

                <p x-show="show" x-transition.delay.200ms class="text-lg sm:text-xl text-green-100 leading-relaxed">
                    Have questions about our initiatives? Want to collaborate or volunteer? 
                    We'd love to hear from you!
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" x-data="{visible:false}" x-intersect="visible=true">
                
                <!-- Address Card -->
                <div x-show="visible" x-transition.delay.100ms class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visit Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        <strong>C-147, Govindpuram</strong><br>
                        Ghaziabad (U.P.)<br>
                        201013
                    </p>
                </div>

                <!-- Email Card -->
                <div x-show="visible" x-transition.delay.200ms class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email Us</h3>
                    <div class="space-y-2">
                        <a href="mailto:info@netzerocmission.com" class="block text-gray-600 hover:text-green-600 transition-colors">
                            info@netzerocmission.com
                        </a>
                        <a href="mailto:ajaymehra@netzerocmission.com" class="block text-gray-600 hover:text-green-600 transition-colors">
                            ajaymehra@netzerocmission.com
                        </a>
                    </div>
                </div>

                <!-- Phone Card -->
                <div x-show="visible" x-transition.delay.300ms class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Call Us</h3>
                    <div class="space-y-2">
                        <a href="tel:+919350889056" class="block text-gray-600 hover:text-green-600 transition-colors">
                            +91 9350889056
                        </a>
                        <a href="tel:+918447649056" class="block text-gray-600 hover:text-green-600 transition-colors">
                            +91 8447649056
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="py-20 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16" x-data="{visible:false}" x-intersect="visible=true">
                
                <!-- Contact Form -->
                <div x-show="visible" x-transition>
                    <div class="mb-8">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Send Us a Message</h2>
                        <p class="text-gray-600 text-lg">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>

                    <!-- Success Message -->
                    @if (session()->has('success'))
                        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg" x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 5000)">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-green-700 font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <form class="space-y-6" wire:submit.prevent="submitForm">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                wire:model="name"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all @error('name') border-red-500 @enderror"
                                placeholder="Enter your full name">
                            @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                wire:model="email"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror"
                                placeholder="your.email@example.com">
                            @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                wire:model="phone"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                placeholder="+91 XXXXXXXXXX">
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <select 
                                id="subject" 
                                wire:model="subject"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all @error('subject') border-red-500 @enderror">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="volunteer">Volunteer Opportunity</option>
                                <option value="partnership">Partnership/Collaboration</option>
                                <option value="donation">Donation</option>
                                <option value="support">Support Request</option>
                                <option value="other">Other</option>
                            </select>
                            @error('subject') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                Your Message <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="message" 
                                wire:model="message"
                                rows="5"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all resize-none @error('message') border-red-500 @enderror"
                                placeholder="Tell us more about your inquiry..."></textarea>
                            @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            wire:loading.attr="disabled"
                            class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white px-8 py-4 rounded-xl font-semibold hover:from-green-700 hover:to-green-800 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2 group disabled:opacity-50 disabled:cursor-not-allowed">
                            <span wire:loading.remove>Send Message</span>
                            <span wire:loading>Sending...</span>
                            <svg wire:loading.remove class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                            <svg wire:loading class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Quick Connect -->
                <div x-show="visible" x-transition.delay.200ms>
                    <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl p-8 text-white h-full">
                        <h3 class="text-2xl font-bold mb-4">Quick Connect</h3>
                        <p class="text-gray-300 mb-6">
                            For urgent matters or immediate assistance, feel free to call us directly.
                        </p>
                        <div class="space-y-3">
                            <a href="tel:+919350889056" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-4 rounded-xl transition-all duration-300 group">
                                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400">Primary Contact</div>
                                    <div class="font-semibold group-hover:text-green-400 transition-colors">+91 9350889056</div>
                                </div>
                            </a>
                            <a href="tel:+918447649056" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-4 rounded-xl transition-all duration-300 group">
                                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400">Alternative Contact</div>
                                    <div class="font-semibold group-hover:text-blue-400 transition-colors">+91 8447649056</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-br from-green-700 to-green-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Join Our Mission for a Cleaner India</h2>
            <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto">
                Every contribution counts. Whether you volunteer, partner, or support our cause, you're making a difference.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#home" class="inline-flex items-center justify-center gap-2 bg-white text-green-800 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg">
                    Learn More About Us
                </a>
                <a href="#programs" class="inline-flex items-center justify-center gap-2 border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition-all duration-300">
                    View Our Programs
                </a>
            </div>
        </div>
    </section>
</div>
