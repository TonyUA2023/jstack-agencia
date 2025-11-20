<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ========== SEO BÁSICO ========== --}}
    <title>
        @hasSection('title')
            @yield('title') | Jstack
        @else
            Jstack – Desarrollo Web & Sistemas a Medida
        @endif
    </title>

    <meta name="description"
          content="@yield('meta_description', 'Desarrollo de plataformas web, sistemas a medida y páginas modernas para negocios. Jstack Agencia.')">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Jstack – Desarrollo Web & Sistemas a Medida')">
    <meta property="og:description" content="@yield('og_description', 'Especialista en desarrollo de plataformas web, sistemas adaptados y páginas minimalistas.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/images/jstack-logo-light.png') }}">

    <meta name="twitter:card" content="summary_large_image">

    {{-- Fuentes + Tailwind --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>

<body class="font-sans antialiased bg-slate-950 text-slate-50">

    {{-- 
        ========== HEADER PÚBLICO (FIXED) ========== 
        Cambios: 
        1. 'sticky' -> 'fixed' (Para que flote y no ocupe espacio)
        2. Added 'w-full' (Para que ocupe todo el ancho al ser fixed)
        3. transition-all duration-300 (Opcional: por si quieres animar el fondo luego con JS)
    --}}
    <header class="fixed top-0 w-full z-50 border-b border-white/5 bg-slate-950/80 backdrop-blur-md transition-all duration-300">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">
            {{-- Logo + Marca --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img
                    src="{{ asset('images/jstack-logo-dark.png') }}"
                    alt="Jstack logo"
                    class="h-9 w-auto hidden sm:block"
                >
                <img
                    src="{{ asset('images/jstack-logo-letter.png') }}"
                    alt="Jstack J logo"
                    class="h-8 w-auto sm:hidden"
                >

                <div class="flex flex-col leading-tight">
                    <span class="text-sm font-semibold tracking-tight text-white">
                        {{ __('layout.brand') }}
                    </span>
                    <span class="text-[11px] text-slate-400">
                        {{ __('layout.tagline') }}
                    </span>
                </div>
            </a>

            {{-- Navegación escritorio --}}
            <div class="hidden items-center gap-6 text-sm font-medium md:flex">
                <a href="#services" class="text-slate-300 hover:text-sky-400 transition">
                    {{ __('layout.nav.services') }}
                </a>
                <a href="#projects" class="text-slate-300 hover:text-sky-400 transition">
                    {{ __('layout.nav.projects') }}
                </a>
                <a href="#about" class="text-slate-300 hover:text-sky-400 transition">
                    {{ __('layout.nav.about') }}
                </a>
                <a href="#contact" class="text-slate-300 hover:text-sky-400 transition">
                    {{ __('layout.nav.contact') }}
                </a>

                {{-- CTA --}}
                <a href="#contact"
                   class="inline-flex items-center rounded-full bg-sky-600 px-4 py-2 text-xs font-semibold text-white shadow hover:bg-sky-500 transition hover:scale-105">
                    {{ __('layout.cta.primary') }}
                </a>

                {{-- Selector de idioma --}}
                <div class="flex items-center gap-1 rounded-full border border-white/10 bg-slate-900/50 px-2 py-1 text-[11px]">
                    <a href="{{ route('set-locale', 'es') }}"
                       class="px-2 py-0.5 rounded-full transition
                       {{ app()->getLocale() === 'es' ? 'bg-white text-slate-900 font-bold' : 'text-slate-400 hover:text-white' }}">
                        ES
                    </a>
                    <a href="{{ route('set-locale', 'en') }}"
                       class="px-2 py-0.5 rounded-full transition
                       {{ app()->getLocale() === 'en' ? 'bg-white text-slate-900 font-bold' : 'text-slate-400 hover:text-white' }}">
                        EN
                    </a>
                </div>
            </div>

            {{-- Móvil CTA --}}
            <div class="flex items-center gap-2 md:hidden">
                <a href="#contact"
                   class="rounded-full bg-sky-600 px-3 py-1.5 text-xs font-semibold text-white shadow hover:bg-sky-500 transition">
                    {{ __('layout.cta.primary') }}
                </a>
            </div>
        </nav>
    </header>

    {{-- 
        ========== CONTENIDO PÚBLICO ========== 
        Nota: Como el header es 'fixed', el contenido empezará DETRÁS del header.
        Asegúrate de que tus secciones internas tengan padding-top si lo necesitan,
        o que sean secciones tipo "Hero" a pantalla completa.
    --}}
    <main class="mx-auto max-w-7xl px-4">
        @yield('content')
    </main>

    {{-- ========== FOOTER PÚBLICO ========== --}}
    <footer class="border-t border-white/10 bg-black/90 mt-auto">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-8 md:flex-row md:items-center md:justify-between">

            <div class="flex items-center gap-3">
                <img
                    src="{{ asset('images/jstack-logo-light.png') }}"
                    alt="Jstack logo"
                    class="h-10 w-auto opacity-80"
                >
                <div class="flex flex-col">
                    <span class="text-sm font-semibold text-slate-200">Jstack</span>
                    <span class="text-[11px] text-slate-500">
                        {{ app()->getLocale() === 'es'
                            ? 'Soluciones web y sistemas hechos a medida.'
                            : 'Web solutions and custom systems.' }}
                    </span>
                </div>
            </div>

            <div class="flex flex-col items-start gap-3 text-[11px] text-slate-500 md:items-end">
                <div class="flex flex-wrap gap-4 text-xs font-medium text-slate-400">
                    <a href="#services" class="hover:text-sky-400 transition">{{ __('layout.nav.services') }}</a>
                    <a href="#projects" class="hover:text-sky-400 transition">{{ __('layout.nav.projects') }}</a>
                    <a href="#about" class="hover:text-sky-400 transition">{{ __('layout.nav.about') }}</a>
                    <a href="#contact" class="hover:text-sky-400 transition">{{ __('layout.nav.contact') }}</a>
                </div>

                <p class="text-[11px]">
                    © {{ date('Y') }} {{ __('layout.brand') }}. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>