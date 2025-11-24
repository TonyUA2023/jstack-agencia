<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title') | Jstack Digital Solutions
        @else
            Jstack – Soluciones Digitales & Software
        @endif
    </title>

    <meta name="description" content="@yield('meta_description', 'Agencia de desarrollo de software, plataformas web y sistemas SaaS.')">
    <link rel="icon" href="images/logo/logo.ico" type="image/x-icon">
    {{-- Fuentes + Tailwind --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Chat Window Animations */
        .chat-window {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            transform-origin: bottom right;
        }
        .chat-hidden {
            opacity: 0;
            transform: scale(0.9) translateY(20px);
            pointer-events: none;
            display: none;
        }
        .chat-visible {
            opacity: 1;
            transform: scale(1) translateY(0);
            pointer-events: all;
            display: flex;
        }
        /* Premium Glass Effect */
        .glass {
            background: rgba(10, 10, 15, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        /* Mobile Menu Transition */
        #mobile-menu {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease;
        }
        .menu-closed {
            transform: translateY(-100%);
            opacity: 0;
            pointer-events: none;
        }
        .menu-open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: all;
        }
    </style>

    @stack('head')
</head>

<body class="font-sans antialiased bg-[#050505] text-slate-50 selection:bg-sky-500 selection:text-white relative">

    {{-- 
        =========================================
        HEADER (NAVBAR GLASS)
        =========================================
    --}}
    <header class="fixed top-0 w-full z-50 border-b border-white/5 bg-black/5 backdrop-blur-xl transition-all duration-300">
        <nav class="mx-auto flex max-w-[1600px] items-center justify-between px-4 md:px-8 py-4 relative z-50">
            
            {{-- 1. LOGO JSTACK --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group focus:outline-none z-50">
                <svg class="h-9 w-9 text-sky-500 group-hover:text-sky-400 transition duration-300" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 10C12 8.89543 12.8954 8 14 8H26C27.1046 8 28 8.89543 28 10V14C28 15.1046 27.1046 16 26 16H12C10.8954 16 10 15.1046 10 14V10Z" fill="currentColor" fill-opacity="0.8"/>
                    <path d="M10 20C10 18.8954 10.8954 18 12 18H26C27.1046 18 28 18.8954 28 20V28C28 30.2091 26.2091 32 24 32H14C11.7909 32 10 30.2091 10 28V20Z" fill="currentColor"/>
                </svg>

                <div class="flex flex-col leading-none">
                    <span class="text-lg font-bold tracking-tight text-white group-hover:text-sky-200 transition">Jstack Digital Solutions</span>
                </div>
            </a>

            {{-- 2. NAVEGACIÓN CENTRAL (Escritorio) --}}
            <div class="hidden lg:flex items-center gap-8 text-[15px] font-medium text-white/90">
                
                {{-- SOBRE NOSOTROS --}}
                <a href="{{ route('about') }}" class="hover:text-sky-400 transition {{ request()->routeIs('about') ? 'text-sky-400 font-bold' : '' }}">
                    {{ app()->getLocale() == 'es' ? 'Sobre Nosotros' : 'About Us' }}
                </a>

                {{-- SERVICIOS --}}
                <a href="{{ route('services') }}" class="hover:text-sky-400 transition {{ request()->routeIs('services') ? 'text-sky-400 font-bold' : '' }}">
                    {{ app()->getLocale() == 'es' ? 'Servicios' : 'Services' }}
                </a>

                {{-- PROYECTOS --}}
                <a href="{{ route('home') }}#projects" class="hover:text-sky-400 transition">
                    {{ app()->getLocale() == 'es' ? 'Proyectos' : 'Projects' }}
                </a>

                {{-- CONTACTO --}}
                <a href="{{ route('home') }}#contact" class="hover:text-sky-400 transition">
                    {{ app()->getLocale() == 'es' ? 'Contacto' : 'Contact' }}
                </a>
            </div>

            {{-- 3. ACCIONES DERECHA (Escritorio) --}}
            <div class="hidden lg:flex items-center gap-5">
                {{-- Idioma --}}
                <div class="flex items-center gap-1 rounded-full border border-white/10 bg-black/20 px-1 py-1 text-[11px] font-bold tracking-wide backdrop-blur-sm">
                    <a href="{{ route('set-locale', 'es') }}" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'es' ? 'bg-white text-black shadow-sm' : 'text-white/70 hover:text-white' }}">ES</a>
                    <a href="{{ route('set-locale', 'en') }}" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'en' ? 'bg-white text-black shadow-sm' : 'text-white/70 hover:text-white' }}">EN</a>
                </div>

                {{-- CTA --}}
                <a href="{{ route('home') }}#contact" class="group relative inline-flex items-center justify-center gap-2 overflow-hidden rounded-full bg-white px-6 py-2.5 text-sm font-bold text-slate-900 transition duration-300 hover:bg-sky-400 hover:text-white shadow-lg">
                    <span class="relative z-10">{{ app()->getLocale() == 'es' ? 'Agenda tu proyecto' : 'Start Project' }}</span>
                    <svg class="relative z-10 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            {{-- 4. BOTÓN MENÚ MÓVIL (Hamburguesa) --}}
            <button id="mobile-menu-btn" class="lg:hidden text-white p-2 focus:outline-none bg-white/5 rounded-lg backdrop-blur-md border border-white/10 z-50" onclick="toggleMobileMenu()">
                <svg id="icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </nav>

        {{-- 
            =========================================
            MENÚ MÓVIL (OVERLAY)
            =========================================
        --}}
        <div id="mobile-menu" class="menu-closed fixed inset-0 z-40 bg-[#050505]/95 backdrop-blur-2xl lg:hidden flex flex-col items-center justify-center space-y-8 h-screen w-screen">
            
            <div class="flex flex-col items-center gap-6 text-2xl font-bold text-white">
                <a href="{{ route('about') }}" onclick="toggleMobileMenu()" class="hover:text-sky-400 transition {{ request()->routeIs('about') ? 'text-sky-400' : '' }}">Sobre Nosotros</a>
                <a href="{{ route('services') }}" onclick="toggleMobileMenu()" class="hover:text-sky-400 transition {{ request()->routeIs('services') ? 'text-sky-400' : '' }}">Servicios</a>
                <a href="{{ route('home') }}#projects" onclick="toggleMobileMenu()" class="hover:text-sky-400 transition">Proyectos</a>
                <a href="{{ route('home') }}#contact" onclick="toggleMobileMenu()" class="hover:text-sky-400 transition">Contacto</a>
            </div>

            <div class="flex flex-col items-center gap-6 mt-8">
                {{-- Idioma Móvil --}}
                <div class="flex items-center gap-4 text-lg font-medium text-slate-400">
                    <a href="{{ route('set-locale', 'es') }}" class="{{ app()->getLocale() === 'es' ? 'text-white underline decoration-sky-500 underline-offset-4' : '' }}">Español</a>
                    <a href="{{ route('set-locale', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'text-white underline decoration-sky-500 underline-offset-4' : '' }}">English</a>
                </div>

                {{-- CTA Móvil --}}
                <a href="{{ route('home') }}#contact" onclick="toggleMobileMenu()" class="rounded-full bg-sky-600 px-8 py-3 text-lg font-bold text-white shadow-lg hover:bg-sky-50 transition">
                    {{ app()->getLocale() == 'es' ? 'Agenda tu proyecto' : 'Start Project' }}
                </a>
            </div>
        </div>
    </header>

    {{-- 
        =========================================
        CONTENIDO PRINCIPAL
        =========================================
    --}}
    <main class="w-full relative min-h-screen">
        @yield('content')
    </main>


    {{-- 
        =========================================
        MEGA FOOTER
        =========================================
    --}}
    <footer class="bg-[#050505] border-t border-white/10 pt-24 pb-12 relative overflow-hidden">
        {{-- Luz Ambiental --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[400px] bg-indigo-500/5 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-[1600px] mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                
                {{-- Columna 1: Branding --}}
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                        <svg class="h-8 w-8 text-slate-200" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 10C12 8.89543 12.8954 8 14 8H26C27.1046 8 28 8.89543 28 10V14C28 15.1046 27.1046 16 26 16H12C10.8954 16 10 15.1046 10 14V10Z" fill="currentColor" fill-opacity="0.8"/>
                            <path d="M10 20C10 18.8954 10.8954 18 12 18H26C27.1046 18 28 18.8954 28 20V28C28 30.2091 26.2091 32 24 32H14C11.7909 32 10 30.2091 10 28V20Z" fill="currentColor"/>
                        </svg>
                        <span class="text-xl font-bold text-white tracking-tight">Jstack Digital Solutions</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-xs">
                        Ingeniería de sistemas y diseño estratégico. Creamos el software que impulsa el futuro de tu empresa.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:border-blue-500 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:border-pink-500 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Col 2 --}}
                <div>
                    <h4 class="text-white font-semibold mb-6">Servicios</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li><a href="{{ route('services') }}" class="hover:text-sky-400 transition">Desarrollo Web High-End</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-sky-400 transition">Plataformas SaaS</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-sky-400 transition">Apps Nativas</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-sky-400 transition">Integración NFC</a></li>
                    </ul>
                </div>

                {{-- Col 3 --}}
                <div>
                    <h4 class="text-white font-semibold mb-6">Agencia</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-sky-400 transition">Sobre Nosotros</a></li>
                        <li><a href="{{ route('home') }}#projects" class="hover:text-sky-400 transition">Portafolio</a></li>
                        <li><a href="{{ route('home') }}#contact" class="hover:text-sky-400 transition">Cotizar Proyecto</a></li>
                    </ul>
                </div>

                {{-- Col 4 --}}
                <div>
                    <h4 class="text-white font-semibold mb-6">Contacto</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li class="flex items-center gap-3 group cursor-pointer">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-sky-500 group-hover:bg-sky-500 group-hover:text-white transition">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <span class="group-hover:text-white transition">admin@jstackhub.com</span>
                        </li>
                        <li class="flex items-center gap-3 group cursor-pointer">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-sky-500 group-hover:bg-sky-500 group-hover:text-white transition">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <span class="group-hover:text-white transition">+51 989 181 858</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-sky-500">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <span>Huancayo, Perú</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-xs">© {{ date('Y') }} Jstack Digital Solutions.</p>
                <div class="flex gap-6 text-xs text-slate-500">
                    <a href="#" class="hover:text-white transition">Términos</a>
                    <a href="#" class="hover:text-white transition">Privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- 
        =========================================
        ECOSISTEMA FLOTANTE (BOTONES)
        =========================================
    --}}
    <div class="fixed bottom-4 right-4 md:bottom-6 md:right-6 z-50 flex flex-col items-end gap-3">
        
        {{-- CHAT WINDOW (COMENTADO PARA DESARROLLO FUTURO) --}}
        {{--
        <div id="ai-chat-window" class="glass chat-window chat-hidden w-[calc(100vw-2rem)] sm:w-[380px] rounded-2xl overflow-hidden shadow-2xl mb-2 flex-col max-h-[500px] border border-white/10">
            <div class="bg-gradient-to-r from-sky-600 to-indigo-600 p-4 flex items-center justify-between shrink-0">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm border border-white/10">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9h.01M15 9h.01" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm">Jstack AI</h4>
                        <span class="flex items-center gap-1.5 text-[10px] text-white/90">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span> En línea
                        </span>
                    </div>
                </div>
                <button onclick="toggleChat()" class="text-white/80 hover:text-white p-1 rounded-md hover:bg-white/10 transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            
            <div class="bg-[#0f172a] flex-1 p-4 overflow-y-auto flex flex-col gap-4 h-[350px]">
                <div class="flex gap-3 items-start">
                    <div class="w-8 h-8 rounded-full bg-sky-600/20 flex-shrink-0 flex items-center justify-center border border-sky-500/30">
                        <svg class="w-4 h-4 text-sky-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div class="bg-slate-800 border border-white/5 text-slate-200 p-3 rounded-2xl rounded-tl-none text-sm shadow-sm">
                        <p>👋 ¡Hola! Soy el asistente virtual de Jstack. ¿En qué puedo ayudarte hoy?</p>
                    </div>
                </div>
                <div class="pl-11 flex flex-wrap gap-2">
                    <button class="text-xs bg-slate-800 hover:bg-slate-700 text-sky-400 px-3 py-2 rounded-lg transition border border-slate-700 hover:border-sky-500/50">Cotizar sistema a medida</button>
                    <button class="text-xs bg-slate-800 hover:bg-slate-700 text-sky-400 px-3 py-2 rounded-lg transition border border-slate-700 hover:border-sky-500/50">Ver servicios</button>
                </div>
            </div>
            
            <div class="p-3 bg-[#050505] border-t border-white/10 shrink-0">
                <div class="relative">
                    <input type="text" placeholder="Escribe aquí..." class="w-full bg-slate-900 border border-slate-800 rounded-full py-3 pl-4 pr-12 text-sm text-white focus:outline-none focus:border-sky-600 focus:ring-1 focus:ring-sky-600 placeholder-slate-500 transition-all">
                    <button class="absolute right-1.5 top-1.5 p-1.5 bg-sky-600 rounded-full text-white hover:bg-sky-500 transition shadow-lg">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>
        </div>
        --}}

        {{-- WhatsApp (ACTUALIZADO) --}}
        <a href="https://wa.me/51989181858" target="_blank" class="group flex items-center gap-3">
            <span class="hidden md:block bg-black/90 backdrop-blur text-white text-xs font-medium py-1.5 px-3 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 absolute right-16 translate-x-2 group-hover:translate-x-0 whitespace-nowrap border border-white/10 shadow-xl">WhatsApp</span>
            <div class="w-12 h-12 rounded-full bg-[#25D366] flex items-center justify-center shadow-lg hover:scale-110 transition duration-300 text-white z-20 relative">
                <span class="absolute inset-0 rounded-full bg-[#25D366] opacity-20 animate-ping"></span>
                <svg class="w-6 h-6 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            </div>
        </a>

        {{-- Email (ACTUALIZADO) --}}
        <a href="mailto:admin@jstackhub.com" class="group flex items-center gap-3">
            <span class="hidden md:block bg-black/90 backdrop-blur text-white text-xs font-medium py-1.5 px-3 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 absolute right-16 translate-x-2 group-hover:translate-x-0 whitespace-nowrap border border-white/10 shadow-xl">Email</span>
            <div class="w-12 h-12 rounded-full bg-slate-800 border border-white/10 flex items-center justify-center shadow-lg hover:scale-110 transition duration-300 text-white z-20 hover:bg-slate-700">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
        </a>

        {{-- AI Robot Trigger (COMENTADO) --}}
        {{--
        <button onclick="toggleChat()" class="group flex items-center gap-2 relative z-20 mt-2">
            <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-red-500 rounded-full border-[3px] border-[#050505] z-30 animate-ping"></span>
            <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-red-500 rounded-full border-[3px] border-[#050505] z-30"></span>
            
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-sky-500 to-indigo-600 flex items-center justify-center shadow-[0_0_20px_rgba(56,189,248,0.4)] hover:shadow-[0_0_30px_rgba(56,189,248,0.6)] hover:scale-110 transition duration-300 text-white animate-bounce-slow">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9h.01M15 9h.01" />
                </svg>
            </div>
        </button>
        --}}

    </div>

    @stack('scripts')

    {{-- 
        =========================================
        SCRIPTS GLOBALES
        =========================================
    --}}
    <script>
        // CHATBOT LOGIC (Aunque el botón esté oculto, dejamos la función por si se descomenta)
        function toggleChat() {
            const chatWindow = document.getElementById('ai-chat-window');
            if (chatWindow.classList.contains('chat-hidden')) {
                chatWindow.classList.remove('chat-hidden');
                chatWindow.classList.add('chat-visible');
            } else {
                chatWindow.classList.remove('chat-visible');
                chatWindow.classList.add('chat-hidden');
            }
        }

        // MOBILE MENU LOGIC
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('icon-open');
            const closeIcon = document.getElementById('icon-close');

            if (menu.classList.contains('menu-closed')) {
                // Abrir
                menu.classList.remove('menu-closed');
                menu.classList.add('menu-open');
                // Cambiar icono
                openIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                // Evitar scroll en el body
                document.body.style.overflow = 'hidden';
            } else {
                // Cerrar
                menu.classList.remove('menu-open');
                menu.classList.add('menu-closed');
                // Restaurar icono
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                // Restaurar scroll
                document.body.style.overflow = 'auto';
            }
        }
    </script>
</body>
</html>