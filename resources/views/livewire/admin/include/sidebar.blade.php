<div>
    <!-- Sidebar -->
    <aside 
        class="w-64 bg-white h-full flex-shrink-0 hidden lg:flex flex-col border-r">
        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">SS</span>
                </div>
                <span class="font-bold text-gray-800">Admin</span>
            </div>
        </div>

        <!-- Nav -->
        <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>

            <a wire:navigate href="{{ route('admin.contact') }}" class="flex items-center gap-3 px-4 py-3 text-white bg-green-600 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contacts
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Users
            </a>
        </nav>

        <!-- Footer -->
        <div class="p-4 border-t text-center text-xs text-gray-500">
            © 2025 Swachh SeVa
        </div>
    </aside>

    <!-- Mobile Sidebar -->
    <div 
        x-show="sidebarOpen"
        x-transition
        @click="sidebarOpen = false"
        class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden" 
        x-cloak>
    </div>

    <aside 
        x-show="sidebarOpen"
        x-transition:enter="transform transition ease-in-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in-out duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed inset-y-0 left-0 z-50 w-64 bg-white lg:hidden flex flex-col"
        x-cloak>
        
        <div class="h-16 flex items-center justify-between px-6 border-b">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">SS</span>
                </div>
                <span class="font-bold text-gray-800">Admin</span>
            </div>
            <button @click="sidebarOpen = false" class="text-gray-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>

            <a wire:navigate href="{{ route('admin.contact') }}" @click="sidebarOpen = false" class="flex items-center gap-3 px-4 py-3 text-white bg-green-600 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contacts
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Users
            </a>
        </nav>
    </aside>
</div>