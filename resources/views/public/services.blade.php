@extends('layouts.public')

@section('title', app()->getLocale() === 'es' ? 'Jstack | Servicios' : 'Jstack | Services')

@push('head')
<style>
    /* 1. BASE RESET & SMOOTHNESS */
    html, body {
        margin: 0;
        padding: 0;
        background-color: #050505;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    /* 2. STICKY STACKING LOGIC */
    .stack-container {
        width: 100%;
        position: relative;
    }

    .stack-section {
        position: sticky;
        top: 0;
        height: 100vh;
        width: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transform-origin: center top;
        transition: transform 0.1s linear, filter 0.1s linear;
        box-shadow: 0 -50px 100px rgba(0,0,0,0.7);
    }

    /* 3. ANIMACIONES */
    @keyframes breathe {
        0% { background-size: 100% 100%; }
        50% { background-size: 140% 140%; }
        100% { background-size: 100% 100%; }
    }
    .animated-bg {
        animation: breathe 15s ease-in-out infinite;
    }

    .reveal-text {
        opacity: 0;
        transform: translateY(50px);
        transition: all 1s cubic-bezier(0.2, 1, 0.3, 1);
    }
    .section-active .reveal-text {
        opacity: 1;
        transform: translateY(0);
    }
    
    .delay-100 { transition-delay: 0.1s; }
    .delay-200 { transition-delay: 0.2s; }
    .delay-300 { transition-delay: 0.3s; }

    /* 4. ORBITAL 3D */
    .orbit-scene {
        perspective: 1000px;
        width: 100%;
        height: 100%;
        position: relative;
    }
    .orbit-item {
        position: absolute;
        top: 50%; left: 50%;
        transform-style: preserve-3d;
        transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        box-shadow: 0 20px 50px rgba(0,0,0,0.6);
        will-change: transform;
    }

    /* 5. MODAL */
    .modal-backdrop {
        background: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(15px);
        opacity: 0; pointer-events: none;
        transition: opacity 0.4s ease;
    }
    .modal-backdrop.open { opacity: 1; pointer-events: auto; }
    .modal-panel {
        transform: scale(0.9) translateY(30px);
        opacity: 0; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    .modal-backdrop.open .modal-panel { transform: scale(1) translateY(0); opacity: 1; }
</style>
@endpush

@section('content')

@php
    $isEs = app()->getLocale() === 'es';
    
    // --- DATOS DE CONTACTO ---
    $phone = '989181858';
    $email = 'admin@jstackhub.com';
    // Link automático a WhatsApp (Código de país 51 para Perú asumido, ajusta si es necesario)
    $wa_link = "https://wa.me/51{$phone}?text=Hola%20Jstack,%20quisiera%20más%20información%20sobre%20sus%20servicios.";

    $slides = [
        [
            'id' => 'hero', 'type' => 'intro', 'accent' => '#ffffff',
            'bg_gradient' => 'from-gray-900 via-black to-gray-900',
            'title_es' => 'Jstack Digital.', 'title_en' => 'Jstack Digital.',
            'desc_es' => 'Ingeniería de Software sin límites.', 'desc_en' => 'Limitless Software Engineering.',
            'btn_text_es' => 'Explorar Servicios', 'btn_text_en' => 'Explore Services',
            'gallery' => []
        ],
        [
            'id' => 'web', 'type' => 'service', 'accent' => '#38bdf8',
            'bg_gradient' => 'from-[#0c4a6e] via-[#020617] to-black',
            'title_es' => 'Web High-End', 'title_en' => 'High-End Web',
            'desc_es' => 'Desarrollo inmersivo. Velocidad instantánea.', 'desc_en' => 'Immersive development. Instant speed.',
            'btn_text_es' => 'Cotizar Web', 'btn_text_en' => 'Quote Web',
            'gallery' => ['https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600', 'https://images.unsplash.com/photo-1550439062-609e1531270e?w=600', 'https://images.unsplash.com/photo-1547658719-da2b51169166?w=600', 'https://images.unsplash.com/photo-1555421689-d68471e189f2?w=600']
        ],
        [
            'id' => 'saas', 'type' => 'service', 'accent' => '#fb923c',
            'bg_gradient' => 'from-[#431407] via-[#1a0500] to-black',
            'title_es' => 'Sistemas SaaS', 'title_en' => 'SaaS Systems',
            'desc_es' => 'Plataformas escalables masivas.', 'desc_en' => 'Massive scalable platforms.',
            'btn_text_es' => 'Cotizar Sistema', 'btn_text_en' => 'Quote System',
            'gallery' => ['https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600', 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600']
        ],
        [
            'id' => 'mobile', 'type' => 'service', 'accent' => '#a78bfa',
            'bg_gradient' => 'from-[#2e1065] via-[#0f0529] to-black',
            'title_es' => 'Apps Nativas', 'title_en' => 'Native Apps',
            'desc_es' => 'iOS & Android. Ecosistema completo.', 'desc_en' => 'iOS & Android. Complete ecosystem.',
            'btn_text_es' => 'Cotizar App', 'btn_text_en' => 'Quote App',
            'gallery' => ['https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600', 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600', 'https://images.unsplash.com/photo-1526498460520-4c246339dccb?w=600', 'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=600']
        ],
        [
            'id' => 'nfc', 'type' => 'service', 'accent' => '#34d399',
            'bg_gradient' => 'from-[#064e3b] via-[#022c22] to-black',
            'title_es' => 'Smart NFC', 'title_en' => 'Smart NFC',
            'desc_es' => 'Tarjetas y control de acceso.', 'desc_en' => 'Cards and access control.',
            'btn_text_es' => 'Cotizar NFC', 'btn_text_en' => 'Quote NFC',
            'gallery' => ['https://images.unsplash.com/photo-1616469829941-c7200edec809?w=600', 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600', 'https://images.unsplash.com/photo-1622558509490-b2f51197c88b?w=600', 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600']
        ]
    ];
@endphp

{{-- INDICADORES DE PROGRESO --}}
<div class="fixed right-6 top-1/2 -translate-y-1/2 z-50 flex flex-col gap-6">
    @foreach($slides as $index => $slide)
        <div class="group flex items-center gap-2 flex-row-reverse">
            <a href="#section-{{ $index }}" 
               class="indicator-dot w-2 h-2 rounded-full bg-white/20 group-hover:bg-white group-hover:scale-150 transition-all duration-300"
               data-index="{{ $index }}"></a>
            <span class="text-[10px] font-mono text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 translate-x-2 group-hover:translate-x-0">
                0{{ $index + 1 }}
            </span>
        </div>
    @endforeach
</div>

{{-- CONTENEDOR PRINCIPAL (STACK) --}}
<main class="stack-container">
    
    @foreach($slides as $index => $slide)
        @php 
            $zIndex = 10 + $index; 
        @endphp

        <section id="section-{{ $index }}" 
                 class="stack-section bg-gradient-to-b {{ $slide['bg_gradient'] }} animated-bg"
                 style="z-index: {{ $zIndex }};">
            
            {{-- Noise Texture --}}
            <div class="absolute inset-0 opacity-[0.15] bg-[url('https://grainy-gradients.vercel.app/noise.svg')] pointer-events-none mix-blend-overlay"></div>
            
            {{-- Glow Ambiental Dinámico --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] rounded-full blur-[150px] opacity-30 pointer-events-none animate-pulse" 
                 style="background-color: {{ $slide['accent'] }};"></div>

            <div class="container mx-auto px-6 relative z-10 flex flex-col items-center justify-center h-full perspective-wrapper">
                
                {{-- Contenido Texto --}}
                <div class="text-center mb-12 md:mb-20 max-w-4xl relative z-20">
                    <span class="reveal-text delay-100 text-xs font-bold uppercase tracking-[0.5em] text-white/50 mb-8 block border border-white/10 inline-block px-4 py-1 rounded-full backdrop-blur-sm">
                        JSTACK / 0{{ $index + 1 }} / {{ strtoupper($slide['id']) }}
                    </span>
                    
                    <h2 class="reveal-text delay-200 text-6xl md:text-9xl font-black tracking-tighter text-white mb-6 leading-[0.9]">
                        {{ $isEs ? $slide['title_es'] : $slide['title_en'] }}
                    </h2>
                    
                    <p class="reveal-text delay-300 text-lg md:text-2xl text-slate-300 font-light mb-10 max-w-2xl mx-auto leading-relaxed">
                        {{ $isEs ? $slide['desc_es'] : $slide['desc_en'] }}
                    </p>

                    <div class="reveal-text delay-300">
                        <button onclick="openModal('{{ $isEs ? $slide['title_es'] : $slide['title_en'] }}')" 
                                class="group relative px-10 py-4 rounded-full bg-white text-black font-bold tracking-wide overflow-hidden transition-all hover:scale-105 hover:shadow-[0_0_40px_rgba(255,255,255,0.3)]">
                            <span class="relative z-10">{{ $isEs ? $slide['btn_text_es'] : $slide['btn_text_en'] }}</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-slate-200 to-white opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </button>
                    </div>
                </div>

                {{-- Galería 3D --}}
                @if(!empty($slide['gallery']))
                    <div class="orbit-scene-wrapper w-full max-w-[1000px] h-[300px] md:h-[400px] reveal-text delay-200">
                        <div class="orbit-scene" data-accent="{{ $slide['accent'] }}">
                            @foreach($slide['gallery'] as $gIndex => $img)
                                <div class="orbit-item w-48 h-28 md:w-[400px] md:h-[250px] -ml-24 -mt-14 md:-ml-[200px] md:-mt-[125px] rounded-2xl overflow-hidden bg-slate-950 border border-white/10 cursor-pointer group">
                                    <img src="{{ $img }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition duration-700 ease-out" alt="Work">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-white/5 to-transparent pointer-events-none"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endforeach

    {{-- FOOTER / SPACER FINAL CON DATOS DE CONTACTO --}}
    <div class="h-[60vh] bg-black flex flex-col items-center justify-center text-white/40 gap-8 relative z-50">
        
        {{-- Bloque de Información --}}
        <div class="flex flex-col md:flex-row gap-10 md:gap-20 text-center">
            {{-- Bloque Teléfono --}}
            <div class="group">
                <p class="text-xs font-bold tracking-[0.2em] uppercase mb-4 text-slate-600">
                    {{ $isEs ? 'Llámanos' : 'Call Us' }}
                </p>
                <a href="{{ $wa_link }}" target="_blank" class="text-xl md:text-3xl font-light text-white hover:text-sky-400 transition-all flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    {{ $phone }}
                </a>
            </div>

            {{-- Bloque Email --}}
            <div class="group">
                <p class="text-xs font-bold tracking-[0.2em] uppercase mb-4 text-slate-600">Email</p>
                <a href="mailto:{{ $email }}" class="text-xl md:text-3xl font-light text-white hover:text-sky-400 transition-all flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    {{ $email }}
                </a>
            </div>
        </div>

        <div class="w-16 h-[1px] bg-white/10 mt-6 mb-2"></div>
        <p class="text-xs tracking-[0.3em] font-mono opacity-50">JSTACK DIGITAL © {{ date('Y') }}</p>
    </div>

</main>

{{-- MODAL DE CONTACTO --}}
<div id="contactModal" class="fixed inset-0 z-[100] modal-backdrop flex items-center justify-center px-4">
    <div class="absolute inset-0" onclick="closeModal()"></div>
    <div class="relative w-full max-w-xl bg-[#0a0a0a] border border-white/10 rounded-3xl shadow-2xl overflow-hidden modal-panel">
        <div class="absolute inset-0 bg-gradient-to-b from-white/5 to-transparent pointer-events-none"></div>
        
        <div class="px-8 py-6 border-b border-white/5 flex justify-between items-center relative z-10">
            <h3 class="text-2xl font-bold text-white">{{ $isEs ? 'Iniciar Proyecto' : 'Start Project' }}</h3>
            <button onclick="closeModal()" class="p-2 rounded-full hover:bg-white/10 text-white/50 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- BARRA DE CONTACTO RÁPIDO --}}
        <div class="bg-white/5 px-8 py-4 flex gap-4 justify-center items-center border-b border-white/5 relative z-10">
            <a href="{{ $wa_link }}" target="_blank" class="flex items-center gap-2 text-sm text-green-400 hover:text-green-300 transition font-mono bg-green-500/10 px-4 py-2 rounded-full border border-green-500/20 hover:border-green-500/50 hover:shadow-[0_0_15px_rgba(74,222,128,0.2)]">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                WhatsApp
            </a>
            <a href="mailto:{{ $email }}" class="flex items-center gap-2 text-sm text-sky-400 hover:text-sky-300 transition font-mono bg-sky-500/10 px-4 py-2 rounded-full border border-sky-500/20 hover:border-sky-500/50 hover:shadow-[0_0_15px_rgba(14,165,233,0.2)]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                {{ $email }}
            </a>
        </div>

        <div class="p-8 relative z-10">
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" id="serviceInput" name="service" value="General">
                <div>
                    <label class="text-xs font-bold text-slate-500 uppercase mb-2 block">Servicio Seleccionado</label>
                    <input type="text" id="displayService" disabled class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white font-bold">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" class="bg-transparent border-b border-white/20 py-3 text-white focus:border-sky-500 outline-none placeholder-slate-600 transition-colors" placeholder="Tu Nombre">
                    <input type="email" class="bg-transparent border-b border-white/20 py-3 text-white focus:border-sky-500 outline-none placeholder-slate-600 transition-colors" placeholder="Tu Email">
                </div>
                <textarea rows="3" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-sky-500 outline-none placeholder-slate-600 transition-colors" placeholder="Detalles del proyecto..."></textarea>
                <button type="submit" class="w-full py-4 bg-sky-500 hover:bg-sky-400 text-white font-bold rounded-xl transition shadow-[0_0_20px_rgba(14,165,233,0.3)] hover:scale-[1.02]">
                    {{ $isEs ? 'Enviar Solicitud' : 'Send Request' }}
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // --- 1. STACKING CARDS EFFECT & ANIMATION TRIGGER ---
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll('.stack-section');
        const indicators = document.querySelectorAll('.indicator-dot');

        // Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('section-active');
                    const id = entry.target.id.replace('section-', '');
                    indicators.forEach(dot => {
                        dot.classList.toggle('bg-white', dot.dataset.index === id);
                        dot.classList.toggle('bg-white/20', dot.dataset.index !== id);
                    });
                }
            });
        }, { threshold: 0.3 });

        sections.forEach(section => observer.observe(section));

        // Depth Scale on Scroll
        window.addEventListener('scroll', () => {
            sections.forEach((section, index) => {
                if (index < sections.length - 1) {
                    const nextSection = sections[index + 1];
                    const rect = nextSection.getBoundingClientRect();
                    
                    if (rect.top <= window.innerHeight && rect.top >= 0) {
                        const percentage = 1 - (rect.top / window.innerHeight);
                        const scale = 1 - (percentage * 0.1); 
                        const brightness = 1 - (percentage * 0.5); 
                        section.style.transform = `scale(${scale})`;
                        section.style.filter = `brightness(${brightness})`;
                    } else if (rect.top > window.innerHeight) {
                        section.style.transform = 'scale(1)';
                        section.style.filter = 'brightness(1)';
                    }
                }
            });
        });
    });

    // --- 2. MODAL LOGIC ---
    const modal = document.getElementById('contactModal');
    const sInput = document.getElementById('serviceInput');
    const dService = document.getElementById('displayService');

    function openModal(service) {
        sInput.value = service;
        dService.value = service;
        modal.classList.remove('hidden');
        setTimeout(() => modal.classList.add('open'), 10);
    }

    function closeModal() {
        modal.classList.remove('open');
        setTimeout(() => modal.classList.add('hidden'), 400); 
    }

    // --- 3. 3D ORBIT LOGIC ---
    class OrbitGallery {
        constructor(el) {
            this.container = el;
            this.items = el.querySelectorAll('.orbit-item');
            this.total = this.items.length;
            this.current = 0;
            this.accent = el.dataset.accent;
            this.init();
        }
        init() {
            this.render();
            setInterval(() => { this.current++; this.render(); }, 3000);
        }
        render() {
            const w = window.innerWidth;
            const radius = w < 768 ? 140 : 340; 
            this.items.forEach((item, i) => {
                const angle = (360 / this.total) * (i - this.current);
                const rad = angle * (Math.PI / 180);
                const z = Math.cos(rad) * radius;
                const x = Math.sin(rad) * radius;
                const zNorm = (z + radius) / (2 * radius); 
                
                item.style.transform = `translate3d(${x}px, ${Math.sin(rad)*20}px, ${z}px) rotateY(${angle * 0.1}deg) scale(${0.6 + (0.4 * zNorm)})`;
                item.style.opacity = 0.3 + (0.7 * zNorm);
                item.style.zIndex = Math.round(zNorm * 100);
                item.style.borderColor = zNorm > 0.9 ? this.accent : 'rgba(255,255,255,0.1)';
                if(zNorm > 0.9) item.style.boxShadow = `0 20px 60px ${this.accent}30`;
                else item.style.boxShadow = 'none';
            });
        }
    }
    document.querySelectorAll('.orbit-scene').forEach(el => new OrbitGallery(el));
</script>
@endsection