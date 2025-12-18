<div>
    <!-- Page Header -->
    <div class="mb-4 md:mb-6">
        <h1 class="text-xl md:text-2xl font-bold text-gray-900">Contact Messages</h1>
        <p class="text-sm md:text-base text-gray-600 mt-1">View and manage all contact form submissions</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="bg-white rounded-xl p-4 md:p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Messages</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $contacts->total() }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-4 md:p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">This Page</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $contacts->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-4 md:p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Latest Message</p>
                    <p class="text-sm font-semibold text-gray-900 mt-1">{{ $contacts->first()?->created_at?->diffForHumans() ?? 'N/A' }}</p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <!-- Table Header -->
        <div class="px-4 md:px-6 py-3 md:py-4 border-b border-gray-200 flex items-center justify-between">
            <div>
                <h2 class="text-base md:text-lg font-semibold text-gray-900">Messages List</h2>
                <p class="text-xs md:text-sm text-gray-600 mt-0.5">All contact form submissions</p>
            </div>
        </div>

        <!-- Desktop Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden xl:table-cell">Email</th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden xl:table-cell">Phone</th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">Date</th>
                        <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($contacts as $contact)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $contact->id }}</td>
                        <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->name }}</td>
                        <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-600 hidden xl:table-cell">
                            <a href="mailto:{{ $contact->email }}" class="hover:text-green-600">{{ $contact->email }}</a>
                        </td>
                        <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-600 hidden xl:table-cell">
                            @if($contact->phone)
                                <a href="tel:{{ $contact->phone }}" class="hover:text-green-600">{{ $contact->phone }}</a>
                            @else
                                <span class="text-gray-400">N/A</span>
                            @endif
                        </td>
                        <td class="px-4 lg:px-6 py-4 text-sm text-gray-900">
                            <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                {{ Str::limit($contact->subject, 20) }}
                            </span>
                        </td>
                        <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-600 hidden lg:table-cell">
                            <div class="text-xs">{{ $contact->created_at->format('M d, Y') }}</div>
                            <div class="text-xs text-gray-400">{{ $contact->created_at->format('h:i A') }}</div>
                        </td>
                        <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm">
                            <button 
                                wire:click="viewMessage({{ $contact->id }})"
                                class="text-green-600 hover:text-green-800 font-medium">
                                View
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                <p class="text-gray-500 font-medium">No messages yet</p>
                                <p class="text-gray-400 text-sm mt-1">Contact form submissions will appear here</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Mobile Cards -->
        <div class="md:hidden divide-y divide-gray-200">
            @forelse($contacts as $contact)
            <div class="p-4 hover:bg-gray-50 transition">
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-medium text-gray-500">#{{ $contact->id }}</span>
                            <span class="inline-flex px-2 py-0.5 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                {{ $contact->subject }}
                            </span>
                        </div>
                        <h3 class="font-semibold text-gray-900">{{ $contact->name }}</h3>
                    </div>
                    <button 
                        wire:click="viewMessage({{ $contact->id }})"
                        class="text-green-600 hover:text-green-800 font-medium text-sm">
                        View
                    </button>
                </div>
                <div class="space-y-1 text-sm">
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:{{ $contact->email }}" class="hover:text-green-600 truncate">{{ $contact->email }}</a>
                    </div>
                    @if($contact->phone)
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:{{ $contact->phone }}" class="hover:text-green-600">{{ $contact->phone }}</a>
                    </div>
                    @endif
                    <div class="flex items-center gap-2 text-gray-500 text-xs mt-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $contact->created_at->format('M d, Y - h:i A') }}
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $contact->message }}</p>
            </div>
            @empty
            <div class="px-6 py-12 text-center">
                <div class="flex flex-col items-center justify-center">
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    <p class="text-gray-500 font-medium">No messages yet</p>
                    <p class="text-gray-400 text-sm mt-1">Contact form submissions will appear here</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($contacts->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $contacts->links() }}
        </div>
        @endif
    </div>

    <!-- View Message Modal -->
    @if($selectedContact)
    <div class="fixed inset-0 z-50 overflow-y-auto" x-data="{ show: @entangle('showModal') }" x-show="show" x-cloak>
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
            <!-- Backdrop -->
            <div 
                x-show="show"
                x-transition.opacity
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                @click="$wire.closeModal()">
            </div>

            <!-- Modal -->
            <div 
                x-show="show"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative inline-block w-full max-w-2xl p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl">
                
                <!-- Header -->
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Message Details</h3>
                        <p class="text-sm text-gray-500 mt-1">ID: #{{ $selectedContact->id }}</p>
                    </div>
                    <button 
                        @click="$wire.closeModal()"
                        class="text-gray-400 hover:text-gray-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Content -->
                <div class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wider">Name</label>
                            <p class="mt-1 text-sm font-medium text-gray-900">{{ $selectedContact->name }}</p>
                        </div>
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wider">Email</label>
                            <p class="mt-1 text-sm text-gray-900">
                                <a href="mailto:{{ $selectedContact->email }}" class="hover:text-green-600">{{ $selectedContact->email }}</a>
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</label>
                            <p class="mt-1 text-sm text-gray-900">
                                @if($selectedContact->phone)
                                    <a href="tel:{{ $selectedContact->phone }}" class="hover:text-green-600">{{ $selectedContact->phone }}</a>
                                @else
                                    <span class="text-gray-400">Not provided</span>
                                @endif
                            </p>
                        </div>
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wider">Date</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $selectedContact->created_at->format('M d, Y - h:i A') }}</p>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</label>
                        <p class="mt-1">
                            <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full bg-blue-100 text-blue-800">
                                {{ $selectedContact->subject }}
                            </span>
                        </p>
                    </div>

                    <div>
                        <label class="text-xs font-medium text-gray-500 uppercase tracking-wider">Message</label>
                        <div class="mt-2 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-sm text-gray-900 leading-relaxed whitespace-pre-wrap">{{ $selectedContact->message }}</p>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="mt-6 flex flex-col sm:flex-row justify-end gap-2 sm:gap-3">
                    <button 
                        @click="$wire.closeModal()"
                        class="w-full sm:w-auto px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition">
                        Close
                    </button>
                    <button 
                        wire:click="deleteMessage({{ $selectedContact->id }})"
                        wire:confirm="Are you sure you want to delete this message?"
                        class="w-full sm:w-auto px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
