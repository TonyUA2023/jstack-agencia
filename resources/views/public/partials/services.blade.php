@php
    $isEs = app()->getLocale() === 'es';

    $services = [
        [
            'id' => 'web',
            'title_es' => 'Diseño Web',
            'title_en' => 'Web Design',
            'headline_es' => 'Impacto visual. Velocidad extrema.',
            'headline_en' => 'Visual impact. Extreme speed.',
            'desc_es' => 'Creamos experiencias web que hipnotizan. No es solo una página, es tu mejor vendedor digital disponible 24/7.',
            'desc_en' => 'We create web experiences that mesmerize. It\'s not just a page, it\'s your best digital salesperson available 24/7.',
            'features_es' => ['Arquitectura SEO', 'Animaciones 60fps', 'Copywriting de Venta'],
            'features_en' => ['SEO Architecture', '60fps Animations', 'Sales Copywriting'],
            'color' => 'text-blue-400',
            'bg_accent' => 'bg-blue-500',
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
            'id' => 'platform',
            'title_es' => 'Sistemas SaaS',
            'title_en' => 'SaaS Systems',
            'headline_es' => 'Tu negocio, automatizado.',
            'headline_en' => 'Your business, automated.',
            'desc_es' => 'Plataformas complejas hechas simples. CRM, ERP o Dashboards diseñados para escalar sin romperse.',
            'desc_en' => 'Complex platforms made simple. CRM, ERP or Dashboards designed to scale without breaking.',
            'features_es' => ['Base de Datos Segura', 'Roles y Permisos', 'Reportes en Tiempo Real'],
            'features_en' => ['Secure Database', 'Roles & Permissions', 'Real-time Reporting'],
            'color' => 'text-indigo-400',
            'bg_accent' => 'bg-indigo-500',
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
            'title_es' => 'Apps Nativas',
            'title_en' => 'Native Apps',
            'headline_es' => 'En el bolsillo de todos.',
            'headline_en' => 'In everyone\'s pocket.',
            'desc_es' => 'Desarrollo para iOS y Android con rendimiento nativo. Notificaciones push y experiencia de usuario de clase mundial.',
            'desc_en' => 'Development for iOS and Android with native performance. Push notifications and world-class UX.',
            'features_es' => ['iOS & Android', 'Modo Offline', 'Integración Biométrica'],
            'features_en' => ['iOS & Android', 'Offline Mode', 'Biometric Integration'],
            'color' => 'text-rose-400',
            'bg_accent' => 'bg-rose-500',
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
            'title_en' => 'NFC Tech',
            'headline_es' => 'Conecta el mundo físico.',
            'headline_en' => 'Connect the physical world.',
            'desc_es' => 'Tarjetas inteligentes y etiquetas que activan acciones digitales al contacto. Innovación tangible para tu marca.',
            'desc_en' => 'Smart cards and tags that trigger digital actions on contact. Tangible innovation for your brand.',
            'features_es' => ['Sin Apps Extra', 'Materiales Premium', 'Gestión en la Nube'],
            'features_en' => ['No Apps Needed', 'Premium Materials', 'Cloud Management'],
            'color' => 'text-emerald-400',
            'bg_accent' => 'bg-emerald-500',
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
    /* --- ESTILOS BASE --- */
    .sticky-wrapper { height: 500vh; } 
    .sticky-content { position: sticky; top: 0; height: 100vh; overflow: hidden; }

    /* --- ARTEFACTOS VISUALES (IPHONE STYLE) --- */
    /* Mobile Phone - Super realista */
    .iphone-mockup {
        width: 280px; height: 560px;
        background: #000; border-radius: 45px;
        border: 8px solid #2d2d2d;
        position: relative; overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.8), inset 0 0 0 2px rgba(255,255,255,0.1);
    }
    .iphone-island {
        position: absolute; top: 15px; left: 50%; transform: translateX(-50%);
        width: 90px; height: 25px; background: black; border-radius: 20px; z-index: 20;
    }
    
    /* Dashboard Card - Glassmorphism puro */
    .glass-dashboard {
        width: 100%; height: 100%;
        background: rgba(20, 20, 25, 0.6);
        backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 24px;
        display: flex; overflow: hidden;
    }

    /* --- ANIMACIONES DE ESCENA --- */
    /* Intro Grid */
    .intro-grid {
        position: absolute; inset: 0; z-index: 50;
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .intro-grid.inactive { opacity: 0; transform: scale(1.1); pointer-events: none; filter: blur(10px); }

    /* Service Slide (Layout General) */
    .service-slide-container {
        position: absolute; inset: 0; 
        opacity: 0; pointer-events: none; z-index: 10;
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        transform: scale(0.95);
    }
    .service-slide-container.active { opacity: 1; pointer-events: auto; transform: scale(1); }

    /* Media Background (Con efecto Apple) */
    .apple-media-bg {
        position: absolute; inset: 0; 
        opacity: 0; transition: opacity 1s ease;
    }
    .apple-media-bg.active { opacity: 1; }
    .apple-overlay {
        background: radial-gradient(circle at center, transparent 0%, #020617 90%);
    }

    /* Carrusel 3D */
    .ios-carousel-wrapper {
        position: absolute; bottom: 40px; right: 40px; width: 320px; height: 200px;
        perspective: 1000px; opacity: 0; transform: translateY(50px); transition: 0.8s ease 0.2s;
    }
    .active .ios-carousel-wrapper { opacity: 1; transform: translateY(0); }
    
    .ios-card {
        width: 100%; height: 100%; position: absolute; border-radius: 20px;
        background-size: cover; background-position: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        transition: all 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: 1px solid rgba(255,255,255,0.1);
    }
    .ios-card.active { transform: translateZ(0); z-index: 10; opacity: 1; }
    .ios-card.next { transform: translateZ(-50px) translateX(20px) rotateY(-5deg); z-index: 5; opacity: 0.6; }
    .ios-card.prev { transform: translateZ(-50px) translateX(-20px) rotateY(5deg); z-index: 5; opacity: 0; }

    /* Modal */
    #contact-modal { transition: opacity 0.3s ease, backdrop-filter 0.3s ease; }
    #contact-modal.open { opacity: 1; pointer-events: auto; backdrop-filter: blur(10px); }
    #modal-content { transform: scale(0.95) translateY(20px); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); }
    #contact-modal.open #modal-content { transform: scale(1) translateY(0); }

    @media (max-width: 1024px) {
        .sticky-wrapper { height: auto; }
        .sticky-content { position: relative; height: auto; display: block; overflow: visible; }
        .service-slide-container { position: relative; opacity: 1 !important; transform: none !important; margin-bottom: 80px; display: block; }
        .intro-grid { display: none; } /* En móvil mostramos directo la lista */
        .ios-carousel-wrapper { position: relative; bottom: auto; right: auto; width: 100%; margin-top: 20px; transform: none !important; opacity: 1 !important; }
    }
</style>

<section id="services" class="bg-slate-950 relative py-10 lg:py-0 font-sans">

    {{-- MODAL DE CONTACTO (GLOBAL) --}}
    <div id="contact-modal" class="fixed inset-0 z-[100] flex items-center justify-center opacity-0 pointer-events-none bg-black/60">
        <div id="modal-content" class="w-full max-w-md bg-[#1c1c1e] rounded-[2rem] border border-white/10 p-8 shadow-2xl relative overflow-hidden">
            {{-- Botón cerrar --}}
            <button id="close-modal" class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20 transition">✕</button>
            
            <div class="text-center mb-6">
                <div class="w-12 h-12 bg-sky-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white">Hablemos</h3>
                <p class="text-slate-400 text-sm mt-1">Cuéntanos sobre tu proyecto <span id="modal-service-name" class="text-sky-400 font-medium"></span></p>
            </div>

            <form class="space-y-4">
                <div>
                    <input type="text" placeholder="{{ $isEs ? 'Tu Nombre' : 'Your Name' }}" class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-600 focus:border-sky-500 outline-none transition">
                </div>
                <div>
                    <input type="email" placeholder="{{ $isEs ? 'Tu Correo' : 'Your Email' }}" class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-600 focus:border-sky-500 outline-none transition">
                </div>
                <div>
                    <textarea rows="3" placeholder="{{ $isEs ? 'Detalles breves...' : 'Short details...' }}" class="w-full bg-black/30 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-600 focus:border-sky-500 outline-none transition resize-none"></textarea>
                </div>
                <button type="button" class="w-full bg-sky-600 hover:bg-sky-500 text-white font-bold py-3.5 rounded-xl transition shadow-lg shadow-sky-900/20">
                    {{ $isEs ? 'Enviar Solicitud' : 'Send Request' }}
                </button>
            </form>
        </div>
    </div>

    <div class="sticky-wrapper">
        <div class="sticky-content bg-slate-950">

            {{-- =============================================
                 ESCENA 0: INTRO / RESUMEN (GRID BENTO)
                 ============================================= --}}
            <div class="intro-grid w-full h-full px-4">
                <div class="text-center mb-10">
                    <h2 class="text-4xl md:text-6xl font-bold text-white tracking-tight mb-2">Jstack Ecosystem</h2>
                    <p class="text-slate-400 text-lg">{{ $isEs ? 'Todo lo que necesitas para escalar.' : 'Everything you need to scale.' }}</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 max-w-6xl w-full">
                    @foreach($services as $s)
                        <div class="group relative h-64 bg-[#151518] border border-white/5 rounded-[2rem] p-6 flex flex-col justify-between overflow-hidden hover:border-white/10 transition-all cursor-default">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                            <div class="w-12 h-12 rounded-2xl {{ $s['bg_accent'] }} bg-opacity-20 flex items-center justify-center {{ $s['color'] }}">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"/></svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">{{ $isEs ? $s['title_es'] : $s['title_en'] }}</h3>
                                <p class="text-sm text-slate-500 line-clamp-2">{{ $isEs ? $s['desc_es'] : $s['desc_en'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-12 animate-bounce text-slate-500">
                    <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                </div>
            </div>

            {{-- =============================================
                 ESCENAS 1-4: DETALLE DE SERVICIOS
                 ============================================= --}}
            @foreach($services as $index => $s)
                <div class="service-slide-container w-full h-full flex items-center justify-center" id="slide-{{ $index }}">
                    
                    {{-- Fondo Ambiental (Video/Img) --}}
                    <div class="apple-media-bg w-full h-full absolute inset-0" id="media-bg-{{ $index }}">
                        <div class="apple-overlay absolute inset-0 z-10"></div>
                        @if($s['media_type'] === 'video')
                            <video class="w-full h-full object-cover opacity-40" autoplay loop muted playsinline><source src="{{ $s['media_src'] }}" type="video/mp4"></video>
                        @else
                            <img src="{{ $s['media_src'] }}" class="w-full h-full object-cover opacity-40">
                        @endif
                    </div>

                    <div class="relative z-20 w-full max-w-7xl px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center h-full">
                        
                        {{-- IZQUIERDA: CONTENIDO TEXTO --}}
                        <div class="space-y-8 mt-20 lg:mt-0">
                            <div>
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 text-white text-xs font-medium tracking-wide mb-6 backdrop-blur-md">
                                    <span class="w-2 h-2 rounded-full {{ $s['bg_accent'] }}"></span>
                                    {{ $isEs ? $s['title_es'] : $s['title_en'] }}
                                </div>
                                <h2 class="text-5xl md:text-7xl font-bold text-white leading-tight mb-4">
                                    {{ $isEs ? $s['headline_es'] : $s['headline_en'] }}
                                </h2>
                                <p class="text-lg text-slate-300 leading-relaxed max-w-lg">
                                    {{ $isEs ? $s['desc_es'] : $s['desc_en'] }}
                                </p>
                            </div>

                            {{-- Features List (Más contenido) --}}
                            <ul class="space-y-3">
                                @foreach(($isEs ? $s['features_es'] : $s['features_en']) as $feature)
                                    <li class="flex items-center gap-3 text-slate-400">
                                        <svg class="w-5 h-5 {{ $s['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>

                            {{-- Botón Contacto --}}
                            <button class="open-contact-btn bg-white text-black px-8 py-4 rounded-full font-bold text-lg hover:bg-slate-200 transition flex items-center gap-2 shadow-[0_0_20px_rgba(255,255,255,0.3)]" 
                                    data-service="{{ $isEs ? $s['title_es'] : $s['title_en'] }}">
                                {{ $isEs ? 'Cotizar Ahora' : 'Get Quote' }}
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </button>
                        </div>

                        {{-- DERECHA: VISUAL ARTEFACTO + CARRUSEL FLOTANTE --}}
                        <div class="relative h-[500px] w-full flex items-center justify-center">
                            
                            {{-- Artefacto Central (Sube cuando está activo) --}}
                            <div class="relative z-10 transform transition-transform duration-700 hover:scale-105">
                                @if($s['id'] === 'web')
                                    {{-- Web Glass Card --}}
                                    <div class="w-[340px] h-[240px] glass-dashboard flex-col p-6 shadow-2xl">
                                        <div class="flex gap-2 mb-4"><div class="w-3 h-3 rounded-full bg-red-500/50"></div><div class="w-3 h-3 rounded-full bg-yellow-500/50"></div></div>
                                        <div class="flex gap-4 h-full">
                                            <div class="w-1/3 h-full bg-white/5 rounded-xl"></div>
                                            <div class="flex-1 flex flex-col gap-3">
                                                <div class="h-4 w-3/4 bg-white/10 rounded"></div>
                                                <div class="h-20 w-full bg-white/5 rounded-xl mt-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($s['id'] === 'platform')
                                    {{-- SaaS Dashboard --}}
                                    <div class="w-[380px] h-[260px] glass-dashboard shadow-2xl">
                                        <div class="w-16 border-r border-white/5 flex flex-col items-center py-6 gap-4">
                                            <div class="w-8 h-8 rounded-lg bg-indigo-500/50"></div>
                                            <div class="w-6 h-1 bg-white/20 rounded"></div><div class="w-6 h-1 bg-white/20 rounded"></div>
                                        </div>
                                        <div class="flex-1 p-6">
                                            <div class="flex justify-between mb-6"><div class="w-32 h-6 bg-white/10 rounded"></div><div class="w-8 h-8 rounded-full bg-white/5"></div></div>
                                            <div class="grid grid-cols-2 gap-4 h-32">
                                                <div class="bg-white/5 rounded-xl border border-white/5 relative overflow-hidden">
                                                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-indigo-500/40 to-transparent"></div>
                                                </div>
                                                <div class="bg-white/5 rounded-xl border border-white/5"></div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($s['id'] === 'mobile')
                                    {{-- iPhone Mockup --}}
                                    <div class="iphone-mockup scale-75 origin-center">
                                        <div class="iphone-island"></div>
                                        <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1616353071855-2c045c4458ae?q=80&w=1000&auto=format&fit=crop')] bg-cover"></div>
                                    </div>
                                @elseif($s['id'] === 'nfc')
                                    {{-- NFC Card Floating --}}
                                    <div class="w-[320px] h-[200px] rounded-2xl bg-gradient-to-br from-emerald-900 to-black border border-emerald-500/30 p-6 flex flex-col justify-between shadow-[0_0_50px_rgba(16,185,129,0.2)] rotate-y-12 rotate-x-6">
                                        <div class="flex justify-between"><div class="w-12 h-8 bg-yellow-600/80 rounded flex items-center justify-center"><div class="w-8 h-full border-x border-black/20"></div></div><svg class="w-8 h-8 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg></div>
                                        <div class="text-right"><p class="text-emerald-400 text-xs tracking-[0.3em]">CONTACTLESS</p><p class="text-white font-bold text-xl tracking-widest mt-1">JSTACK</p></div>
                                    </div>
                                @endif
                            </div>

                            {{-- CARRUSEL 3D (Estilo iOS Gallery) --}}
                            <div class="ios-carousel-wrapper" id="carousel-wrapper-{{ $index }}">
                                <div class="relative w-full h-full" id="carousel-inner-{{ $index }}">
                                    @foreach($s['carousel_images'] as $imgIndex => $imgSrc)
                                        <div class="ios-card {{ $imgIndex === 0 ? 'active' : ($imgIndex === 1 ? 'next' : 'prev') }}" 
                                             style="background-image: url('{{ $imgSrc }}');"
                                             data-index="{{ $imgIndex }}">
                                        </div>
                                    @endforeach
                                </div>
                                {{-- Botones navegación discretos --}}
                                <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 flex gap-4">
                                    <button class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center backdrop-blur text-white transition carousel-nav-btn" data-direction="prev" data-carousel-id="{{ $index }}">←</button>
                                    <button class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center backdrop-blur text-white transition carousel-nav-btn" data-direction="next" data-carousel-id="{{ $index }}">→</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    
    // --- 1. MODAL LOGIC ---
    const modal = document.getElementById('contact-modal');
    const closeModal = document.getElementById('close-modal');
    const modalServiceText = document.getElementById('modal-service-name');
    const btns = document.querySelectorAll('.open-contact-btn');

    btns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            modalServiceText.textContent = btn.dataset.service;
            modal.classList.remove('pointer-events-none', 'opacity-0');
            modal.classList.add('open');
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.remove('open');
        setTimeout(() => modal.classList.add('pointer-events-none', 'opacity-0'), 300);
    });

    // --- 2. SCROLL & LOGIC (Desktop Only for complex animations) ---
    if (window.innerWidth >= 1024) {
        const wrapper = document.querySelector(".sticky-wrapper");
        const introGrid = document.querySelector(".intro-grid");
        
        // Config: 0 = Intro, 1=Web, 2=Platform, 3=Mobile, 4=NFC
        const totalServices = 4;
        const totalSteps = totalServices + 1; // 5 pasos en total (0 a 4)

        const carouselStates = {};

        // Init Carousels
        for (let i = 0; i < totalServices; i++) {
            const wrapper = document.getElementById(`carousel-inner-${i}`);
            if(wrapper) {
                const items = wrapper.querySelectorAll('.ios-card');
                carouselStates[i] = { current: 0, total: items.length, items: items };
            }
        }

        function updateCarousel(idx) {
            const state = carouselStates[idx];
            state.items.forEach((item, i) => {
                item.className = 'ios-card'; // reset
                if (i === state.current) item.classList.add('active');
                else if (i === (state.current + 1) % state.total) item.classList.add('next');
                else item.classList.add('prev');
            });
        }

        document.querySelectorAll('.carousel-nav-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const idx = parseInt(btn.dataset.carouselId);
                const dir = btn.dataset.direction;
                const state = carouselStates[idx];
                if(dir === 'next') state.current = (state.current + 1) % state.total;
                else state.current = (state.current - 1 + state.total) % state.total;
                updateCarousel(idx);
            });
        });

        function handleScroll() {
            const rect = wrapper.getBoundingClientRect();
            const scrollDist = -rect.top;
            const totalHeight = rect.height - window.innerHeight;

            if (totalHeight <= 0) return;

            let progress = scrollDist / totalHeight;
            if (progress < 0) progress = 0; if (progress > 1) progress = 1;

            let activeIndex = Math.floor(progress * totalSteps); 
            // activeIndex 0 = Intro Grid
            // activeIndex 1 = Service 0 (Web)
            // ...

            updateScene(activeIndex);
        }

        function updateScene(index) {
            // Step 0: Intro Grid
            if (index === 0) {
                introGrid.classList.remove('inactive');
                // Hide all service slides
                for (let i = 0; i < totalServices; i++) {
                    document.getElementById(`slide-${i}`).classList.remove('active');
                }
            } else {
                introGrid.classList.add('inactive');
                
                // Show specific service (index - 1 because services array starts at 0)
                const serviceIndex = index - 1;
                
                for (let i = 0; i < totalServices; i++) {
                    const slide = document.getElementById(`slide-${i}`);
                    if (i === serviceIndex) {
                        slide.classList.add('active');
                    } else {
                        slide.classList.remove('active');
                    }
                }
            }
        }

        window.addEventListener("scroll", handleScroll);
        handleScroll();
    }
});
</script>