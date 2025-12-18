<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Swachh SeVa Foundation - Building a cleaner, healthier India through innovation, community participation, and sustainable waste management practices. Join our Zero Waste Movement led by Ajay Mehra.">
    <meta name="keywords" content="zero waste, swachh bharat, waste management, Ajay Mehra, SS Bin, cleanliness, sanitation, environmental sustainability, India, NGO, clean India">
    <meta name="author" content="Ajay Mehra - Swachh SeVa Foundation">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="theme-color" content="#15803d">

    <!-- Open Graph Meta Tags (Facebook, LinkedIn) -->
    <meta property="og:title" content="{{ $title ?? 'Swachh SeVa Foundation - Creating a Cleaner India' }}">
    <meta property="og:description" content="Join Ajay Mehra's mission for a cleaner, greener, and healthier India. Promoting zero waste, sustainable practices, and community-driven cleanliness initiatives.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <meta property="og:site_name" content="Swachh SeVa Foundation">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Swachh SeVa Foundation - Creating a Cleaner India' }}">
    <meta name="twitter:description" content="Join Ajay Mehra's mission for a cleaner, greener, and healthier India. Zero Waste Movement | SS Bin Implementation | River Conservation">
    <meta name="twitter:image" content="{{ asset('logo.png') }}">

    <!-- Additional Meta Tags -->
    <meta name="geo.region" content="IN">
    <meta name="geo.placename" content="Ghaziabad, Uttar Pradesh, India">
    <meta name="geo.position" content="28.685847;77.459628">
    <meta name="ICBM" content="28.685847, 77.459628">

    <title>{{ $title ?? 'Swachh SeVa Foundation - Creating a Cleaner, Greener India' }}</title>

    <!-- Favicon: SVG preferred with ICO fallback -->
    <link  rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    @if (file_exists(public_path('build/manifest.json')))
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
    $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($cssFile)
    <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
    @endif
    @else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Page-specific meta tags -->
    @stack('meta')
    
    @vite('resources/css/app.css')
    @livewireStyles
    <style>[x-cloak]{display:none!important;} .transition-fast{transition:all .25s ease}</style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <livewire:includes.header />

    {{ $slot }}
    <livewire:includes.footer />
    @if (file_exists(public_path('build/manifest.json')))
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($jsFile)
    @endif
    @endif
    @livewireScripts
</head>

<body>

    @livewireScripts
</body>

</html>