@php
    $isEs = app()->getLocale() === 'es';

    /* --- DATOS: ECOSISTEMA JSTACK --- */
    $services = [
        [
            'id' => 'web',
            'title_es' => 'Diseño Web',
            'title_en' => 'Web Design',
            'headline_es' => 'Impacto visual. Velocidad extrema.',
            'headline_en' => 'Visual impact. Extreme speed.',
            'desc_es' => 'No es solo una web, es tu sede digital. Arquitectura persuasiva diseñada para convertir visitas en clientes.',
            'desc_en' => 'It is not just a website, it is your digital HQ. Persuasive architecture designed to turn visits into customers.',
            'features_es' => ['UX/UI Centrado en Ventas', 'Animaciones 60fps', 'SEO Técnico Avanzado'],
            'features_en' => ['Sales-Centric UX/UI', '60fps Animations', 'Advanced Technical SEO'],
            'color' => 'text-blue-400',
            'bg_accent' => 'bg-blue-500',
            'media_type' => 'video',
            'media_src' => 'images/vid/web.mp4', 
            'icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S12 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S7.5 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418',
            'main_image' => 'images/projects/tractoleo.png',
            'gallery_images' => [
                'images/projects/wayra.png',
                'images/projects/merino.png',
                'images/projects/tractoleo.png',
            ]
        ],
        [
            'id' => 'sales',
            'title_es' => 'Sistema de Ventas',
            'title_en' => 'Sales System',
            'headline_es' => 'Control total. Ventas imparables.',
            'headline_en' => 'Total control. Unstoppable sales.',
            'desc_es' => 'El cerebro de tu negocio. Gestiona inventarios, facturación electrónica y clientes desde un solo panel unificado.',
            'desc_en' => 'The brain of your business. Manage inventory, electronic invoicing, and customers from a single unified panel.',
            'features_es' => ['Facturación SUNAT', 'Stock en Tiempo Real', 'Reportes Inteligentes'],
            'features_en' => ['Electronic Invoicing', 'Real-time Stock', 'Smart Reporting'],
            'color' => 'text-indigo-400',
            'bg_accent' => 'bg-indigo-500',
            'media_type' => 'video',
            'media_src' => 'images/vid/sistemas.mp4',
            'icon' => 'M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z',
            'main_dashboard' => 'images/systems/dashboard.png',
            'mod_pos' => 'images/systems/venta.png',
            'mod_stock' => 'images/systems/products.png',
            'mod_crm' => 'images/systems/clientes.png',
            'mod_reports' => 'images/systems/reporte.png',
        ],
        [
            'id' => 'mobile',
            'title_es' => 'Apps Nativas',
            'title_en' => 'Native Apps',
            'headline_es' => 'Tu marca en su bolsillo.',
            'headline_en' => 'Your brand in their pocket.',
            'desc_es' => 'Desarrollamos aplicaciones con interfaces modernas y fluidas. Diseños abstractos y funcionales que enamoran.',
            'desc_en' => 'We develop apps with modern and fluid interfaces. Abstract and functional designs that captivate.',
            'features_es' => ['iOS & Android', 'Modo Offline', 'UX de Clase Mundial'],
            'features_en' => ['iOS & Android', 'Offline Mode', 'World-Class UX'],
            'color' => 'text-rose-400',
            'bg_accent' => 'bg-rose-500',
            'media_type' => 'image',
            'media_src' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop',
            'icon' => 'M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3',
            // No necesitamos imágenes externas para la UI abstracta
            'gallery_images' => []
        ],
        [
            'id' => 'nfc',
            'title_es' => 'Tecnología NFC',
            'title_en' => 'NFC Tech',
            'headline_es' => 'El futuro del Networking.',
            'headline_en' => 'The future of Networking.',
            'desc_es' => 'Tarjetas metálicas inteligentes que comparten tu información al instante. Sin apps, solo contacto.',
            'desc_en' => 'Smart metal cards that share your info instantly. No apps, just contact.',
            'features_es' => ['Sin Aplicaciones', 'Material Premium', 'Panel Cloud'],
            'features_en' => ['No Apps Needed', 'Premium Material', 'Cloud Dashboard'],
            'color' => 'text-emerald-400',
            'bg_accent' => 'bg-emerald-500',
            'media_type' => 'video',
            'media_src' => 'images/vid/nfc.mp4',
            'icon' => 'M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z',
            'phone_screen_video' => 'https://cdn.dribbble.com/users/1253081/screenshots/16337301/media/80737500278326144040780803044014.mp4',
            'gallery_images' => []
        ]
    ];
@endphp

<style>
    /* --- ESTRUCTURA SCROLLYTELLING --- */
    .services-sticky-wrapper { 
        height: 550vh; 
        position: relative;
        z-index: 10;
        background-color: #020617; /* Slate 950 */
    }
    .services-sticky-viewport { 
        position: sticky; 
        top: 0; 
        height: 100vh; 
        overflow: hidden; 
        perspective: 1200px;
    }

    /* --- FONDOS DINÁMICOS --- */
    .bg-layer {
        position: absolute; inset: 0; opacity: 0; transition: opacity 1s ease-in-out; z-index: 0; pointer-events: none;
    }
    .bg-layer.active { opacity: 0.2; }
    .bg-gradient-overlay {
        position: absolute; inset: 0;
        background: radial-gradient(circle at 50% 50%, transparent 0%, #020617 90%);
        z-index: 1;
    }

    /* --- CONTENEDORES DE ESCENA --- */
    .scene-container {
        position: absolute; inset: 0; width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        opacity: 0; pointer-events: none;
        transform: scale(0.95) translateY(20px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        z-index: 10;
    }
    .scene-container.active {
        opacity: 1; pointer-events: auto; transform: scale(1) translateY(0); z-index: 20;
    }

    /* ESCENA 0: INTRO GRID */
    .intro-grid-container {
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        width: 100%; max-width: 1280px; margin: 0 auto; padding: 2rem;
    }
    .intro-card {
        background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);
        backdrop-filter: blur(10px); transition: all 0.4s ease;
    }
    .intro-card:hover {
        background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.15); transform: translateY(-5px);
    }

    /* --- ANIMACIONES ESPECÍFICAS (3D & INTERACCIÓN) --- */

    /* 1. WEB: BROWSER */
    .browser-3d {
        transform-style: preserve-3d; transform: perspective(2000px) rotateX(10deg) scale(0.9);
        opacity: 0; transition: all 1s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    .scene-container.active .browser-3d {
        transform: perspective(2000px) rotateX(0deg) scale(1); opacity: 1; transition-delay: 0.2s;
    }
    .web-tab { cursor: pointer; transition: transform 0.2s; }
    .web-tab.active { z-index: 10; transform: translateY(-4px); border-bottom: 2px solid #38bdf8; }
    
    /* 2. SALES: ORBIT & ZOOM (ACTUALIZADO) */
    .sales-orbit { position: relative; width: 600px; height: 500px; perspective: 1000px; }
    
    .sales-center { 
        transition: all 0.6s cubic-bezier(0.2, 0.8, 0.2, 1); 
        box-shadow: 0 0 0 1px rgba(99, 102, 241, 0.2), 0 20px 50px -10px rgba(0,0,0,0.5); 
        transform-origin: center center;
    }
    .sales-center.dimmed { opacity: 0; transform: scale(0.5); pointer-events: none; }
    
    .sales-satellite {
        position: absolute; cursor: pointer;
        transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        opacity: 0; transform: scale(0);
        box-shadow: 0 10px 30px -5px rgba(0,0,0,0.5);
        z-index: 20;
    }
    .scene-container.active .sales-satellite { opacity: 1; transform: scale(1); }

    .sat-1 { top: 0%; left: 10%; transition-delay: 0.1s; }
    .sat-2 { top: 0%; right: 10%; transition-delay: 0.2s; }
    .sat-3 { bottom: 10%; left: 10%; transition-delay: 0.3s; }
    .sat-4 { bottom: 10%; right: 10%; transition-delay: 0.4s; }
    
    /* ESTADO EXPANDIDO DEL MÓDULO */
    .sales-satellite.expanded {
        top: 50% !important; left: 50% !important; right: auto !important; bottom: auto !important;
        transform: translate(-50%, -50%) scale(1.6) !important; 
        z-index: 100; opacity: 1 !important;
        border-color: #818cf8; box-shadow: 0 25px 50px -12px rgba(99, 102, 241, 0.5);
        cursor: default;
    }
    .close-module-btn { opacity: 0; pointer-events: none; transition: opacity 0.3s; }
    .sales-satellite.expanded .close-module-btn { opacity: 1; pointer-events: auto; }


    /* 3. MOBILE: UI ABSTRACTA (ACTUALIZADO) */
    .iphone-frame {
        transform: rotateY(-15deg) translateY(50px); opacity: 0;
        transition: all 1s cubic-bezier(0.2, 0.8, 0.2, 1);
        box-shadow: -30px 30px 80px -20px rgba(0,0,0,0.8); background: #000;
    }
    .scene-container.active .iphone-frame { transform: rotateY(0deg) translateY(0); opacity: 1; }
    
    .iphone-screen-content {
        position: relative; width: 100%; height: 100%;
        background: radial-gradient(circle at 50% 0%, #1e1e24 0%, #000 100%);
        overflow: hidden; padding: 20px; display: flex; flex-direction: column;
    }
    /* Widgets Abstractos CSS */
    .abstract-widget {
        background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3); margin-bottom: 12px;
        transform: translateY(20px); opacity: 0; transition: all 0.8s ease;
    }
    .scene-container.active .abstract-widget:nth-child(1) { transition-delay: 0.3s; opacity: 1; transform: translateY(0); }
    .scene-container.active .abstract-widget:nth-child(2) { transition-delay: 0.4s; opacity: 1; transform: translateY(0); }
    .scene-container.active .abstract-widget:nth-child(3) { transition-delay: 0.5s; opacity: 1; transform: translateY(0); }

    .skeleton-btn { height: 40px; background: linear-gradient(90deg, #f43f5e, #e11d48); border-radius: 12px; width: 100%; margin-top: auto; }
    
    /* Gráfica animada CSS */
    .css-chart { display: flex; align-items: flex-end; gap: 6px; height: 60px; padding-top: 10px; }
    .bar { width: 100%; background: #3b82f6; border-radius: 4px 4px 0 0; opacity: 0.8; animation: growBar 2s infinite alternate ease-in-out; }
    @keyframes growBar { 0% { height: 20%; } 100% { height: 90%; } }


    /* 4. NFC: CARD */
    .nfc-scene { perspective: 1500px; position: relative; }
    .nfc-reader {
        transform: rotateX(20deg) translateZ(-50px); opacity: 0; transition: all 0.8s ease;
    }
    .scene-container.active .nfc-reader { transform: rotateX(10deg) translateZ(0); opacity: 1; }
    .metal-card-floating {
        position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%) rotateY(180deg);
        opacity: 0; transition: all 1s cubic-bezier(0.2, 0.8, 0.2, 1) 0.3s;
        box-shadow: 0 15px 35px rgba(0,0,0,0.5); background: linear-gradient(135deg, #333 0%, #000 100%);
    }
    .scene-container.active .metal-card-floating { transform: translate(-50%, -10%) rotateY(0deg); opacity: 1; }
    .scene-container.active .metal-card-floating:hover { transform: translate(-50%, -15%) rotateY(-5deg) scale(1.05); }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
        .services-sticky-wrapper { height: auto; }
        .services-sticky-viewport { position: relative; height: auto; overflow: visible; }
        .scene-container { position: relative; opacity: 1 !important; transform: none !important; margin-bottom: 80px; display: block; height: auto; padding: 40px 20px; }
        .bg-layer { display: none; }
        .intro-grid-container { padding-top: 60px; }
        
        .sales-orbit { width: 100%; height: auto; display: flex; flex-direction: column; gap: 20px; }
        .sales-center { display: none; }
        .sales-satellite { position: relative; inset: auto !important; opacity: 1 !important; transform: none !important; width: 100%; height: 80px; }
        .metal-card-floating { position: relative; top: auto; left: auto; transform: none !important; opacity: 1 !important; margin: 0 auto; margin-bottom: 20px; }
        .nfc-reader, .iphone-frame, .browser-3d { transform: none !important; opacity: 1 !important; }
    }
</style>

<section id="services" class="font-sans">
    <div class="services-sticky-wrapper">
        <div class="services-sticky-viewport bg-slate-950">
            
            {{-- BACKGROUNDS DINÁMICOS --}}
            @foreach($services as $i => $s)
                <div class="bg-layer" id="bg-layer-{{ $i + 1 }}">
                    @if($s['media_type'] === 'video')
                        <video class="w-full h-full object-cover grayscale opacity-50" autoplay loop muted playsinline>
                            <source src="{{ asset($s['media_src']) }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ asset($s['media_src']) }}" class="w-full h-full object-cover grayscale opacity-30">
                    @endif
                    <div class="bg-gradient-overlay"></div>
                </div>
            @endforeach

            {{-- ESCENA 0: INTRO GRID --}}
            <div class="scene-container active" id="scene-0">
                <div class="intro-grid-container">
                    <div class="text-center mb-16 space-y-4">
                        <span class="text-sky-500 font-bold tracking-widest uppercase text-sm">Jstack Solutions</span>
                        <h2 class="text-5xl md:text-7xl font-bold text-white tracking-tight">
                            {{ $isEs ? 'Innovación' : 'Innovation' }} <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-200 to-slate-600">
                                {{ $isEs ? 'en cada capa.' : 'at every layer.' }}
                            </span>
                        </h2>
                        <p class="text-slate-400 text-xl max-w-2xl mx-auto">
                            {{ $isEs ? 'Desde la primera línea de código hasta la experiencia del usuario final.' : 'From the first line of code to the end-user experience.' }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
                        @foreach($services as $s)
                            <div class="intro-card rounded-2xl p-8 flex flex-col justify-between h-64 group cursor-default">
                                <div class="w-12 h-12 rounded-xl {{ $s['bg_accent'] }} bg-opacity-10 flex items-center justify-center {{ $s['color'] }} mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"/></svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-2">{{ $isEs ? $s['title_es'] : $s['title_en'] }}</h3>
                                    <p class="text-sm text-slate-500 leading-relaxed">{{ Str::limit($isEs ? $s['desc_es'] : $s['desc_en'], 80) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ESCENAS 1-4: DETALLE DE SERVICIOS --}}
            @foreach($services as $index => $s)
                @php $sceneIndex = $index + 1; @endphp
                <div class="scene-container" id="scene-{{ $sceneIndex }}">
                    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">
                        
                        {{-- TEXTO (Izquierda) --}}
                        <div class="space-y-8 order-2 lg:order-1">
                            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm">
                                <span class="w-2 h-2 rounded-full {{ $s['bg_accent'] }} animate-pulse"></span>
                                <span class="text-white font-medium text-sm tracking-wide">{{ $isEs ? $s['title_es'] : $s['title_en'] }}</span>
                            </div>
                            
                            <h2 class="text-4xl md:text-6xl font-bold text-white leading-[1.1]">
                                {{ $isEs ? $s['headline_es'] : $s['headline_en'] }}
                            </h2>
                            
                            <p class="text-lg text-slate-400 leading-relaxed max-w-lg">
                                {{ $isEs ? $s['desc_es'] : $s['desc_en'] }}
                            </p>

                            <div class="grid grid-cols-1 gap-3">
                                @foreach(($isEs ? $s['features_es'] : $s['features_en']) as $feature)
                                    <div class="flex items-center gap-3 text-slate-300">
                                        <div class="w-6 h-6 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                                            <svg class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                        <span>{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="pt-4">
                                <a href="#contact" class="group inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-full font-bold transition-all hover:bg-slate-200 hover:scale-105">
                                    {{ $isEs ? 'Iniciar Proyecto' : 'Start Project' }}
                                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>

                        {{-- VISUAL (Derecha) --}}
                        <div class="order-1 lg:order-2 flex items-center justify-center h-[500px]">
                            
                            @if($s['id'] === 'web')
                                {{-- 1. WEB: BROWSER --}}
                                <div class="browser-3d w-full max-w-xl">
                                    {{-- Tabs --}}
                                    <div class="flex gap-2 mb-[-1px] pl-4 relative z-10">
                                        @foreach($s['gallery_images'] as $i => $img)
                                            <div class="web-tab {{ $i === 0 ? 'active' : '' }} bg-[#1e293b] text-slate-400 px-4 py-2 rounded-t-lg text-xs border border-white/10 border-b-0 w-24 truncate" 
                                                 onclick="changeWebTab(this, '{{ asset($img) }}')">
                                                Project {{ $i + 1 }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="bg-[#1e293b] rounded-xl border border-white/10 shadow-2xl overflow-hidden aspect-[16/10] flex flex-col relative z-20">
                                        <div class="h-10 bg-[#0f172a] border-b border-white/5 flex items-center px-4 gap-2">
                                            <div class="flex gap-1.5"><div class="w-3 h-3 rounded-full bg-red-500"></div><div class="w-3 h-3 rounded-full bg-yellow-500"></div><div class="w-3 h-3 rounded-full bg-green-500"></div></div>
                                            <div class="flex-1 ml-4 h-6 bg-white/5 rounded-md"></div>
                                        </div>
                                        <div class="flex-1 relative bg-black">
                                            <img id="web-main-img" src="{{ asset($s['main_image']) }}" class="w-full h-full object-cover transition-opacity duration-300">
                                        </div>
                                    </div>
                                </div>

                            @elseif($s['id'] === 'sales')
                                {{-- 2. SALES: ORBIT & ZOOM --}}
                                <div class="sales-orbit flex items-center justify-center">
                                    
                                    {{-- Centro --}}
                                    <div class="sales-center relative w-72 h-48 bg-[#0f172a] rounded-2xl border border-indigo-500/30 overflow-hidden z-10 flex flex-col items-center justify-center group cursor-default">
                                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/20 to-slate-900"></div>
                                        <img src="{{ asset($s['main_dashboard']) }}" class="absolute inset-0 w-full h-full object-cover opacity-40 mix-blend-luminosity">
                                        <div class="relative z-20 text-center">
                                            <div class="text-indigo-400 mb-1"><svg class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg></div>
                                            <span class="text-white font-bold text-lg tracking-wide">ECOSYSTEM</span>
                                        </div>
                                    </div>

                                    {{-- Satélites --}}
                                    @php 
                                        $modules = [
                                            ['pos', 'Punto de Venta', $s['mod_pos']], 
                                            ['crm', 'Clientes (CRM)', $s['mod_crm']], 
                                            ['stock', 'Inventario', $s['mod_stock']], 
                                            ['reports', 'Reportes', $s['mod_reports']]
                                        ]; 
                                    @endphp

                                    @foreach($modules as $k => $mod)
                                        <div class="sales-satellite sat-{{ $k+1 }} w-36 h-24 bg-[#1e293b] rounded-xl border border-white/10 overflow-hidden group flex flex-col shadow-2xl transition-all"
                                             onclick="expandSalesModule(this)">
                                            
                                            <div class="relative h-full w-full overflow-hidden">
                                                <img src="{{ asset($mod[2]) }}" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 group-hover:scale-110 transition duration-500">
                                                <div class="absolute inset-0 bg-black/30 group-hover:bg-transparent transition"></div>
                                            </div>
                                            
                                            <div class="absolute bottom-0 inset-x-0 bg-black/80 backdrop-blur-sm py-1.5 text-center border-t border-white/5">
                                                <span class="text-[10px] font-bold text-white uppercase tracking-widest">{{ $mod[1] }}</span>
                                            </div>

                                            <div class="close-module-btn absolute top-2 right-2 bg-black/50 hover:bg-red-500 rounded-full p-1 cursor-pointer z-50" 
                                                 onclick="event.stopPropagation(); closeSalesModule(this.parentElement)">
                                                <svg class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            @elseif($s['id'] === 'mobile')
                                {{-- 3. MOBILE: UI ABSTRACTA (CSS) --}}
                                <div class="mobile-wrapper w-full flex justify-center">
                                    <div class="iphone-frame w-[280px] h-[580px] rounded-[45px] border-[8px] border-[#222] relative overflow-hidden ring-1 ring-white/10">
                                        
                                        {{-- Dynamic Island --}}
                                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-28 h-7 bg-black rounded-b-2xl z-30 flex items-center justify-center gap-2">
                                            <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                                            <div class="w-1 h-1 rounded-full bg-blue-500"></div>
                                        </div>

                                        {{-- Contenido Abstracto --}}
                                        <div class="iphone-screen-content pt-12">
                                            
                                            <div class="flex justify-between items-center mb-6 px-1">
                                                <div class="h-4 w-8 bg-white/20 rounded-md"></div>
                                                <div class="h-8 w-8 rounded-full bg-gradient-to-tr from-rose-500 to-orange-400"></div>
                                            </div>

                                            {{-- Widget 1 --}}
                                            <div class="abstract-widget p-4 h-32 flex flex-col justify-between relative overflow-hidden group">
                                                <div class="absolute -right-4 -top-4 w-20 h-20 bg-rose-500/30 rounded-full blur-xl group-hover:bg-rose-500/50 transition"></div>
                                                <div class="flex justify-between items-start">
                                                    <div class="w-8 h-8 rounded bg-white/10 flex items-center justify-center text-white text-xs">J</div>
                                                    <div class="text-xs text-white/50 font-mono">•••• 4210</div>
                                                </div>
                                                <div>
                                                    <div class="text-xs text-white/60 mb-1">Balance Total</div>
                                                    <div class="text-2xl font-bold text-white">$12,450.00</div>
                                                </div>
                                            </div>

                                            {{-- Widget 2 --}}
                                            <div class="abstract-widget p-3 flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center text-emerald-400">
                                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                </div>
                                                <div>
                                                    <div class="h-2 w-24 bg-white/20 rounded mb-1.5"></div>
                                                    <div class="h-2 w-16 bg-white/10 rounded"></div>
                                                </div>
                                            </div>

                                            {{-- Widget 3 --}}
                                            <div class="abstract-widget p-4 flex-1">
                                                <div class="flex justify-between mb-4">
                                                    <div class="text-xs text-white/60">Actividad</div>
                                                    <div class="text-xs text-green-400">+24%</div>
                                                </div>
                                                <div class="css-chart items-end mt-auto h-24 gap-2">
                                                    <div class="bar bg-white/10" style="height: 40%; animation-delay: 0s"></div>
                                                    <div class="bar bg-white/20" style="height: 65%; animation-delay: 0.2s"></div>
                                                    <div class="bar bg-rose-500" style="height: 85%; animation-delay: 0.4s; box-shadow: 0 0 15px rgba(244, 63, 94, 0.5)"></div>
                                                    <div class="bar bg-white/20" style="height: 50%; animation-delay: 0.6s"></div>
                                                    <div class="bar bg-white/10" style="height: 30%; animation-delay: 0.8s"></div>
                                                </div>
                                            </div>

                                            <div class="skeleton-btn flex items-center justify-center text-white font-bold text-sm tracking-wide shadow-lg shadow-rose-900/40 mt-4">
                                                Comenzar
                                            </div>

                                        </div>
                                    </div>
                                    
                                    {{-- Floating Element --}}
                                    <div class="absolute top-1/2 -right-4 w-12 h-12 bg-blue-500/20 backdrop-blur-md rounded-xl border border-blue-400/30 flex items-center justify-center animate-bounce delay-700">
                                        <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                                    </div>
                                </div>

                            @elseif($s['id'] === 'nfc')
                                {{-- 4. NFC: CARD --}}
                                <div class="nfc-scene w-full h-full flex items-center justify-center">
                                    <div class="nfc-reader w-[260px] h-[520px] bg-slate-900 rounded-[40px] border-4 border-slate-800 relative overflow-hidden shadow-2xl">
                                        <video class="w-full h-full object-cover opacity-60" autoplay loop muted playsinline>
                                            <source src="{{ asset($s['phone_screen_video']) }}" type="video/mp4">
                                        </video>
                                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 border border-emerald-500/50 rounded-full animate-ping"></div>
                                    </div>
                                    <div class="metal-card-floating w-[300px] h-[180px] rounded-xl p-6 flex flex-col justify-between border border-white/10">
                                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent pointer-events-none rounded-xl"></div>
                                        <div class="flex justify-between items-start z-10">
                                            <div class="w-10 h-8 bg-yellow-600/80 rounded flex items-center justify-center border border-yellow-400/30">
                                                <div class="grid grid-cols-2 gap-1"><div class="w-3 h-4 border border-black/20"></div><div class="w-3 h-4 border border-black/20"></div></div>
                                            </div>
                                            <svg class="w-8 h-8 text-white/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/></svg>
                                        </div>
                                        <div class="text-white font-mono tracking-widest z-10">JSTACK MEMBER</div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<script>
    // --- LÓGICA SCROLLYTELLING ---
    document.addEventListener("DOMContentLoaded", () => {
        if(window.innerWidth >= 1024) {
            const wrapper = document.querySelector('.services-sticky-wrapper');
            const scenes = [
                document.getElementById('scene-0'),
                document.getElementById('scene-1'),
                document.getElementById('scene-2'),
                document.getElementById('scene-3'),
                document.getElementById('scene-4')
            ];
            const bgs = [
                null, 
                document.getElementById('bg-layer-1'),
                document.getElementById('bg-layer-2'),
                document.getElementById('bg-layer-3'),
                document.getElementById('bg-layer-4')
            ];

            const totalScenes = scenes.length;
            
            function handleServiceScroll() {
                const rect = wrapper.getBoundingClientRect();
                const viewH = window.innerHeight;
                const progress = Math.abs(Math.min(0, rect.top)) / (rect.height - viewH);
                let activeIndex = Math.floor(progress * totalScenes);
                activeIndex = Math.max(0, Math.min(activeIndex, totalScenes - 1));

                scenes.forEach((scene, idx) => {
                    if (idx === activeIndex) {
                        scene.classList.add('active');
                        if(bgs[idx]) bgs[idx].classList.add('active');
                    } else {
                        scene.classList.remove('active');
                        if(bgs[idx]) bgs[idx].classList.remove('active');
                    }
                });
            }

            window.addEventListener('scroll', handleServiceScroll, { passive: true });
            handleServiceScroll(); 
        }
    });

    // --- INTERACCIONES UI ---
    
    // 1. Web Tabs
    function changeWebTab(el, src) {
        document.querySelectorAll('.web-tab').forEach(t => t.classList.remove('active'));
        el.classList.add('active');
        const img = document.getElementById('web-main-img');
        img.style.opacity = 0;
        setTimeout(() => { img.src = src; img.style.opacity = 1; }, 200);
    }

    // 2. Sales Module Expand (Lógica Zoom)
    function expandSalesModule(element) {
        if (element.classList.contains('expanded')) return;
        const orbitContainer = element.closest('.sales-orbit');
        const center = orbitContainer.querySelector('.sales-center');
        const allSatellites = orbitContainer.querySelectorAll('.sales-satellite');
        
        allSatellites.forEach(sat => sat.classList.remove('expanded'));
        element.classList.add('expanded');
        center.classList.add('dimmed');
    }

    function closeSalesModule(element) {
        const orbitContainer = element.closest('.sales-orbit');
        const center = orbitContainer.querySelector('.sales-center');
        element.classList.remove('expanded');
        center.classList.remove('dimmed');
    }
</script>