<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    
    @if (file_exists(public_path('build/manifest.json')))
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
    @endphp
    @if ($cssFile)
    <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
    @endif
    @else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    
    @livewireStyles
    <style>[x-cloak]{display:none!important;}</style>
</head>

<body class="bg-gray-100" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <livewire:admin.include.sidebar />
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <livewire:admin.include.header />
            
            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>