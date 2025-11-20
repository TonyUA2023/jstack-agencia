@php
    $isEs = app()->getLocale() === 'es';

    $services = [
        [
            'id' => 'web',
            'title_es' => 'Diseño Web Estratégico',
            'title_en' => 'Strategic Web Design',
            'desc_es' => 'Diseño sitios que atrapan. Estructura pensada para vender, SEO técnico y velocidad extrema.',
            'desc_en' => 'Websites that captivate. Structure built for sales, technical SEO, and extreme speed.',
            'color' => 'text-sky-400',
            'bg_glow' => 'bg-sky-500/20',
            'media_type' => 'video', 
            'media_src' => 'https://cdn.coverr.co/videos/coverr-typing-on-computer-keyboard-4664/1080p.mp4', 
            'icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S12 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S7.5 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418',
            'carousel_images' => [
                'https://images.unsplash.com/photo-1481487484168-9b995ecc168d?q=80&w=1000&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1000&auto=format&fit=crop',
                'https://images.unsplash.com/photo-146092589591-cd27f679795f?q=80&w=1000&auto=format&fit=crop',
            ]
        ],
        [
            'id' => 'platform', // SAAS
            'title_es' => 'Sistemas a Medida (SaaS)',
            'title_en' => 'Custom SaaS Platforms',
            'desc_es' => 'Automatización pura. Paneles administrativos, CRM o ERPs construidos sobre las reglas de tu negocio.',
            'desc_en' => 'Pure automation. Admin panels, CRMs, or ERPs built strictly on your business rules.',
            'color' => 'text-indigo-400',
            'bg_glow' => 'bg-indigo-500/20',
            'media_type' => 'video', 
            'media_src' => 'https://cdn.coverr.co/videos/coverr-coding-on-laptop-2-4592/1080p.mp4', 
            'icon' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5',
            'carousel_images' => [
                'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1542744094-24638eff58bb?q=80&w=1000&auto=format&fit=crop',
                'https://images.unsplash.com/photo-146092589591-cd27f679795f?q=80&w=1000&auto=format&fit=crop',
            ]
        ],
        [
            'id' => 'mobile',
            'title_es' => 'Apps Móviles Nativas',
            'title_en' => 'Native Mobile Apps',
            'desc_es' => 'iOS y Android. Aplicaciones fluidas, notificacions push y funcionalidades offline.',
            'desc_en' => 'iOS and Android. Fluid apps, push notifications, and offline capabilities.',
            'color' => 'text-rose-400',
            'bg_glow' => 'bg-rose-500/20',
            'media_type' => 'image', 
            'media_src' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop', 
            'icon' => 'M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3',
            'carousel_images' => [
                'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1522199755839-a2bacb67c546?q=80&w=1000&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?q=80&w=1000&auto=format&fit=crop',
            ]
        ],
        [
            'id' => 'nfc',
            'title_es' => 'Tecnología NFC',
            'title_en' => 'NFC Technology',
            'desc_es' => 'Conecta el mundo físico con el digital. Tarjetas de presentación inteligentes y control de accesos.',
            'desc_en' => 'Connect physical and digital worlds. Smart business cards and access control.',
            'color' => 'text-emerald-400',
            'bg_glow' => 'bg-emerald-500/20',
            'media_type' => 'video', 
            'media_src' => 'https://cdn.coverr.co/videos/coverr-contactless-payment-with-phone-4631/1080p.mp4', 
            'icon' => 'M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z',
            'carousel_images' => [
                'https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=1000&auto=format&fit=crop', 
                'https://images.unsplash.com/photo-1627483341857-4148a27d21b9?q=80&w=1000&auto=format&fit=crop', 
                'https://images.unsplash.com/photo-1606293926075-69a00febf280?q=80&w=1000&auto=format&fit=crop', 
            ]
        ]
    ];
@endphp

<style>
    /* Scroll Area */
    .sticky-wrapper { height: 500vh; } 
    .sticky-content { position: sticky; top: 0; height: 100vh; overflow: hidden; }

    /* Texto */
    .text-slide {
        position: absolute; inset: 0; 
        opacity: 0; transform: translateY(30px); pointer-events: none;
        transition: all 0.7s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    .text-slide.active { opacity: 1; transform: translateY(0); pointer-events: auto; z-index: 20; }

    /* Media Fondo */
    .media-bg-slide {
        position: absolute; inset: 0; 
        opacity: 0; transform: scale(1.05); transition: all 1s ease;
        filter: brightness(0.5) blur(4px); /* Más oscuro y desenfocado para que resalte el contenido */
    }
    .media-bg-slide.active { opacity: 1; transform: scale(1); z-index: 5; }

    /* CONTENEDOR DE ARTEFACTOS CSS (ICONOS/MOCKUPS)
       CAMBIO CLAVE: Gestión de posición para dejar espacio al carrusel
    */
    .css-artifact-container {
        position: absolute; 
        top: 50%; left: 50%; /* Centrado inicialmente */
        transform: translate(-50%, -50%) scale(1);
        display: flex; items-center; justify-center;
        opacity: 0; transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        z-index: 10;
        pointer-events: none;
    }
    
    /* ESTADO ACTIVO (Con carrusel): 
       El artefacto sube al 35% de la altura y se reduce ligeramente (scale 0.85)
       para dejar el "Campo de Respeto" abajo para el carrusel. 
    */
    .css-artifact-container.active {
        opacity: 1; 
        top: 35%; /* SUBE HACIA ARRIBA */
        transform: translate(-50%, -50%) scale(0.85);
        pointer-events: auto;
    }

    /* CARRUSEL 3D EMERGENTE */
    .carousel-3d-wrapper {
        position: absolute;
        bottom: 20px; left: 0; right: 0; /* Pegado abajo */
        height: 40%; /* Ocupa el 40% inferior */
        opacity: 0;
        transform: translateY(100px); /* Sale desde abajo */
        transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        z-index: 15;
        pointer-events: none;
        perspective: 1200px;
    }
    .carousel-3d-wrapper.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .carousel-inner {
        position: relative; width: 100%; height: 100%;
        transform-style: preserve-3d; transition: transform 0.8s ease;
        display: flex; align-items: center; justify-content: center;
    }

    .carousel-item {
        position: absolute;
        width: 280px; height: 180px; /* Tamaño fijo para control */
        background-size: cover; background-position: center;
        border-radius: 1rem;
        border: 1px solid rgba(255,255,255,0.2);
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        opacity: 0; transition: all 0.6s ease;
    }
    @media (min-width: 1280px) {
        .carousel-item { width: 340px; height: 220px; }
    }

    .carousel-item.active { opacity: 1; transform: translateZ(200px); z-index: 10; }
    .carousel-item.prev { opacity: 0.6; transform: translateX(-200px) translateZ(-100px) rotateY(25deg); z-index: 5; }
    .carousel-item.next { opacity: 0.6; transform: translateX(200px) translateZ(-100px) rotateY(-25deg); z-index: 5; }

    /* ARTEFACTOS VISUALES ESPECÍFICOS */
    
    /* 1. Web: Browser */
    .artifact-web .browser-window {
        width: 320px; height: 200px; background: #0f172a; 
        border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); overflow: hidden;
    }
    .artifact-web .header { height: 24px; background: #1e293b; border-bottom: 1px solid rgba(255,255,255,0.05); display: flex; gap: 6px; align-items: center; padding: 0 10px; }
    .artifact-web .dot { width: 8px; height: 8px; border-radius: 50%; }
    .artifact-web .content { padding: 20px; display: grid; gap: 10px; grid-template-columns: 1fr 1fr; }
    .artifact-web .skeleton { background: rgba(255,255,255,0.05); border-radius: 6px; }

    /* 2. SAAS: DASHBOARD (NUEVO DISEÑO) */
    .artifact-saas-dashboard {
        width: 340px; height: 220px; background: #0f172a;
        border-radius: 16px; border: 1px solid rgba(99, 102, 241, 0.3); /* Indigo border */
        box-shadow: 0 0 40px rgba(99, 102, 241, 0.15);
        display: flex; overflow: hidden; position: relative;
    }
    /* Sidebar */
    .artifact-saas-dashboard .sidebar { width: 60px; background: rgba(99, 102, 241, 0.1); border-right: 1px solid rgba(255,255,255,0.05); display: flex; flex-col; align-items: center; padding-top: 20px; gap: 12px; }
    .artifact-saas-dashboard .sidebar-item { width: 30px; height: 6px; background: rgba(99, 102, 241, 0.4); border-radius: 4px; }
    /* Main */
    .artifact-saas-dashboard .main { flex: 1; padding: 15px; display: flex; flex-direction: column; gap: 10px; }
    .artifact-saas-dashboard .top-bar { width: 100%; height: 10px; background: rgba(255,255,255,0.05); border-radius: 4px; margin-bottom: 5px; }
    .artifact-saas-dashboard .grid-widgets { display: grid; grid-template-columns: 2fr 1fr; gap: 10px; height: 100%; }
    .artifact-saas-dashboard .widget { background: rgba(255,255,255,0.03); border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); position: relative; overflow: hidden;}
    /* Fake Chart */
    .artifact-saas-dashboard .chart-line { position: absolute; bottom: 0; left: 0; width: 100%; height: 40%; background: linear-gradient(to top, rgba(99,102,241,0.4), transparent); clip-path: polygon(0% 100%, 0% 60%, 20% 40%, 40% 80%, 60% 30%, 80% 50%, 100% 20%, 100% 100%); }

    /* 3. Mobile: Phone */
    .artifact-mobile-phone {
        width: 160px; height: 280px; background: #0f172a;
        border: 4px solid #334155; border-radius: 24px;
        position: relative; overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.6);
    }
    .artifact-mobile-phone .notch { position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 60px; height: 14px; background: #334155; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; z-index: 2; }
    .artifact-mobile-phone .screen { width: 100%; height: 100%; background: linear-gradient(135deg, rgba(244, 63, 94, 0.1), rgba(15, 23, 42, 1)); padding: 25px 10px 10px 10px; display: flex; flex-direction: column; gap: 8px; }
    .artifact-mobile-phone .app-block { background: rgba(255,255,255,0.1); border-radius: 8px; }

    /* 4. NFC: Card */
    .artifact-nfc-card {
        width: 260px; height: 160px; 
        background: linear-gradient(135deg, #064e3b, #0f172a);
        border-radius: 16px; border: 1px solid rgba(16, 185, 129, 0.3);
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.15);
        display: flex; flex-direction: column; justify-content: space-between; padding: 20px;
        position: relative;
    }
    .artifact-nfc-card .chip { width: 36px; height: 28px; background: linear-gradient(135deg, #eab308, #ca8a04); border-radius: 4px; }

    /* Animaciones de entrada interna */
    .css-artifact-container.active .artifact-web .browser-window { animation: float 6s ease-in-out infinite; }
    .css-artifact-container.active .artifact-saas-dashboard { animation: float 5s ease-in-out infinite reverse; }
    .css-artifact-container.active .artifact-mobile-phone { animation: float 7s ease-in-out infinite; }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Grid Final */
    .finale-grid-wrapper {
        position: absolute; inset: 0;
        opacity: 0; transform: translateY(50px);
        transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        z-index: 25; pointer-events: none;
        display: grid; grid-template-columns: 2fr 2fr; gap: 15px; align-content: center; justify-content: center; padding: 20px;
    }
    .finale-grid-wrapper.active { opacity: 1; transform: translateY(0); pointer-events: auto; }
    .finale-card { background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 20px; text-align: center; display: flex; flex-direction: column; align-items: center; gap: 10px; }

    /* Mobile */
    @media (max-width: 1024px) {
        .sticky-wrapper { height: auto; }
        .sticky-content { position: relative; height: auto; display: block; }
        .text-slide, .media-bg-slide, .css-artifact-container, .carousel-3d-wrapper { 
            position: relative; opacity: 1 !important; transform: none !important; top: auto; left: auto;
            margin-bottom: 30px; padding-top: 10px;
        }
        .media-bg-slide { display: none; } 
        .css-artifact-container { transform: none !important; height: 220px; }
        .css-artifact-container.active { top: auto; transform: none; }
        .carousel-3d-wrapper { height: 200px; bottom: 0; }
        .carousel-item { width: 220px; height: 140px; }
        .finale-grid-wrapper { position: relative; display: grid; opacity: 1 !important; transform: none !important; pointer-events: auto !important; margin-top: 40px; }
        #text-finale { margin-top: 50px; }
    }
</style>
<section id="services" class="bg-slate-950 relative py-10 lg:py-0">

    <div class="sticky-wrapper">
        <div class="sticky-content flex items-center justify-center">

            <div class="relative w-full max-w-7xl px-6 mx-auto h-full flex flex-col lg:flex-row items-center justify-between">
                
                {{-- COLUMNA IZQUIERDA: TEXTOS --}}
                <div class="relative w-full lg:w-5/12 h-[60vh] lg:h-[400px] flex flex-col justify-center z-30 order-2 lg:order-1 mt-10 lg:mt-0">
                    
                    <div class="absolute -top-10 left-0 hidden lg:block">
                        <p class="text-xs font-bold tracking-[0.3em] text-slate-500 uppercase">Jstack Agency</p>
                        <h2 class="text-2xl font-bold text-white">Servicios</h2>
                    </div>

                    @foreach($services as $index => $s)
                        <div class="text-slide flex flex-col items-start justify-center" id="text-{{ $index }}">
                            <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg {{ $s['bg_glow'] }} {{ $s['color'] }} border border-white/10 mb-6">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $s['icon'] }}" />
                                </svg>
                            </div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                                {{ $isEs ? $s['title_es'] : $s['title_en'] }}
                            </h2>
                            <p class="text-slate-400 text-lg lg:text-xl leading-relaxed">
                                {{ $isEs ? $s['desc_es'] : $s['desc_en'] }}
                            </p>
                        </div>
                    @endforeach

                    {{-- TEXTO FINAL --}}
                    <div class="text-slide flex flex-col items-start justify-center" id="text-finale">
                        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                            {{ $isEs ? '¿Listo para empezar?' : 'Ready to start?' }}
                        </h2>
                        <p class="text-slate-400 text-lg mb-8">
                            {{ $isEs ? 'Transformemos tu idea en realidad digital.' : 'Let\'s turn your idea into digital reality.' }}
                        </p>
                        <a href="#contact" class="bg-sky-600 text-white px-8 py-4 rounded-full font-bold hover:bg-sky-500 transition">
                            {{ $isEs ? 'Agendar Llamada' : 'Schedule Call' }}
                        </a>
                    </div>

                </div>

                {{-- COLUMNA DERECHA: VISUALES COMPLEJOS --}}
                <div class="relative w-full lg:w-6/12 h-[50vh] lg:h-[600px] order-1 lg:order-2 perspective-container">
                    
                    {{-- 1. FONDO MEDIA (VIDEO) --}}
                    <div class="absolute inset-0 rounded-3xl overflow-hidden border border-white/5 bg-slate-900 shadow-2xl" id="media-bg-container">
                        @foreach($services as $index => $s)
                            <div class="media-bg-slide w-full h-full" id="media-bg-{{ $index }}">
                                @if($s['media_type'] === 'video')
                                    <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                                        <source src="{{ $s['media_src'] }}" type="video/mp4">
                                    </video>
                                @else
                                    <img src="{{ $s['media_src'] }}" class="w-full h-full object-cover" alt="visual">
                                @endif
                            </div>
                        @endforeach
                    </div>

                    {{-- 2. ARTEFACTOS CSS (ICONOS QUE SUBEN) --}}
                    
                    {{-- WEB --}}
                    <div class="css-artifact-container" id="artifact-0">
                        <div class="artifact-web">
                            <div class="browser-window">
                                <div class="header">
                                    <div class="dot bg-red-500"></div><div class="dot bg-yellow-500"></div><div class="dot bg-green-500"></div>
                                </div>
                                <div class="content">
                                    <div class="skeleton h-24 w-full col-span-2"></div>
                                    <div class="skeleton h-20 w-full"></div>
                                    <div class="skeleton h-20 w-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- SAAS / PLATFORM (NUEVO DISEÑO DASHBOARD) --}}
                    <div class="css-artifact-container" id="artifact-1">
                        <div class="artifact-saas-dashboard">
                            <div class="sidebar">
                                <div class="sidebar-item"></div>
                                <div class="sidebar-item w-4"></div>
                                <div class="sidebar-item w-4"></div>
                            </div>
                            <div class="main">
                                <div class="top-bar"></div>
                                <div class="grid-widgets">
                                    <div class="widget">
                                        <div class="chart-line"></div>
                                    </div>
                                    <div class="widget bg-indigo-500/10"></div>
                                    <div class="widget col-span-2 h-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- MOBILE --}}
                    <div class="css-artifact-container" id="artifact-2">
                        <div class="artifact-mobile-phone">
                            <div class="notch"></div>
                            <div class="screen">
                                <div class="app-block h-20 w-full bg-rose-500/20"></div>
                                <div class="flex gap-2">
                                    <div class="app-block h-20 w-1/2"></div>
                                    <div class="app-block h-20 w-1/2"></div>
                                </div>
                                <div class="app-block h-12 w-full mt-auto"></div>
                            </div>
                        </div>
                    </div>

                    {{-- NFC --}}
                    <div class="css-artifact-container" id="artifact-3">
                        <div class="artifact-nfc-card">
                            <div class="chip"></div>
                            <div class="mt-auto text-right">
                                <div class="text-[10px] text-emerald-300 tracking-widest">NFC CARD</div>
                                <div class="font-bold text-white text-lg tracking-widest">JSTACK</div>
                            </div>
                        </div>
                    </div>

                    {{-- 3. CARRUSEL 3D (ENTRA POR ABAJO) --}}
                    @foreach($services as $index => $s)
                        <div class="carousel-3d-wrapper" id="carousel-wrapper-{{ $index }}">
                            <div class="carousel-inner" id="carousel-inner-{{ $index }}">
                                @foreach($s['carousel_images'] as $imgIndex => $imgSrc)
                                    <div class="carousel-item" 
                                         style="background-image: url('{{ $imgSrc }}');"
                                         data-index="{{ $imgIndex }}">
                                    </div>
                                @endforeach
                            </div>
                            {{-- Botones flotantes --}}
                            <button class="carousel-nav-btn absolute left-2 top-1/2 -translate-y-1/2 z-30 p-2 rounded-full bg-slate-900/80 text-white hover:bg-sky-500 transition border border-white/10" data-direction="prev" data-carousel-id="{{ $index }}">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            </button>
                            <button class="carousel-nav-btn absolute right-2 top-1/2 -translate-y-1/2 z-30 p-2 rounded-full bg-slate-900/80 text-white hover:bg-sky-500 transition border border-white/10" data-direction="next" data-carousel-id="{{ $index }}">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                    @endforeach

                    {{-- 4. GRID FINAL --}}
                    <div class="finale-grid-wrapper" id="finale-grid-wrapper">
                        @foreach($services as $s)
                            <div class="finale-card">
                                <div class="w-10 h-10 rounded-full {{ $s['bg_glow'] }} flex items-center justify-center {{ $s['color'] }}">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}" />
                                    </svg>
                                </div>
                                <span class="text-xs text-slate-300 font-semibold">{{ $isEs ? $s['title_es'] : $s['title_en'] }}</span>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

{{-- SCRIPT JS COMPLETO --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
    if (window.innerWidth < 1024) return;

    const wrapper = document.querySelector(".sticky-wrapper");
    const mediaBgContainer = document.getElementById("media-bg-container");
    const finaleGridWrapper = document.getElementById("finale-grid-wrapper");
    const textFinale = document.getElementById("text-finale");

    const totalServices = 4;
    const totalSteps = totalServices + 1;

    // --- 1. CAROUSEL LOGIC ---
    const carouselStates = {}; 

    function initCarousel(serviceIndex) {
        const carouselInner = document.getElementById(`carousel-inner-${serviceIndex}`);
        if (!carouselInner) return;
        const items = carouselInner.querySelectorAll('.carousel-item');
        if (items.length === 0) return;

        carouselStates[serviceIndex] = { current: 0, total: items.length, items: items };
        updateCarousel(serviceIndex);
    }

    function updateCarousel(serviceIndex) {
        const state = carouselStates[serviceIndex];
        state.items.forEach((item, i) => {
            item.classList.remove('active', 'prev', 'next');
            item.style.transform = '';
            item.style.opacity = '0';
            item.style.zIndex = '0';
            
            // Lógica 3D simplificada para carrusel limpio
            if (i === state.current) {
                item.classList.add('active');
                // item.style.transform handled by CSS class
            } else if (i === (state.current - 1 + state.total) % state.total) {
                item.classList.add('prev');
            } else if (i === (state.current + 1) % state.total) {
                item.classList.add('next');
            }
        });
    }

    document.querySelectorAll('.carousel-nav-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const idx = parseInt(btn.dataset.carouselId);
            const dir = btn.dataset.direction;
            const state = carouselStates[idx];
            if(dir === 'next') state.current = (state.current + 1) % state.total;
            else state.current = (state.current - 1 + state.total) % state.total;
            updateCarousel(idx);
        });
    });

    for (let i = 0; i < totalServices; i++) initCarousel(i);

    // --- 2. SCROLL LOGIC ---
    function handleScroll() {
        const rect = wrapper.getBoundingClientRect();
        const scrollDist = -rect.top;
        const totalHeight = rect.height - window.innerHeight;

        if (totalHeight <= 0) return;

        let progress = scrollDist / totalHeight;
        if (progress < 0) progress = 0;
        if (progress > 1) progress = 1;

        let idx = Math.floor(progress * totalSteps);
        if (idx >= totalSteps) idx = totalSteps - 1;

        updateScene(idx);
    }

    function updateScene(index) {
        // SERVICIOS
        for (let i = 0; i < totalServices; i++) {
            const text = document.getElementById(`text-${i}`);
            const media = document.getElementById(`media-bg-${i}`);
            const artifact = document.getElementById(`artifact-${i}`);
            const carousel = document.getElementById(`carousel-wrapper-${i}`);

            if (index === i) {
                if(text) text.classList.add("active");
                if(media) media.classList.add("active");
                if(artifact) artifact.classList.add("active"); // Esto dispara que suba el icono
                if(carousel) carousel.classList.add("active"); // Esto dispara que entre el carrusel
            } else {
                if(text) text.classList.remove("active");
                if(media) media.classList.remove("active");
                if(artifact) artifact.classList.remove("active");
                if(carousel) carousel.classList.remove("active");
            }
        }

        // FINAL
        if (index === totalServices) {
            mediaBgContainer.style.opacity = "0";
            mediaBgContainer.style.transform = "scale(0.9)";
            textFinale.classList.add("active");
            finaleGridWrapper.classList.add("active");
        } else {
            mediaBgContainer.style.opacity = "1";
            mediaBgContainer.style.transform = "scale(1)";
            textFinale.classList.remove("active");
            finaleGridWrapper.classList.remove("active");
        }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll();
});
</script>