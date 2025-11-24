@extends('layouts.public')

@section('title', app()->getLocale() === 'es' ? 'Sobre Nosotros' : 'About Us')

@php
    $isEs = app()->getLocale() === 'es';
    
    /* --- DATOS DEL EQUIPO (AHORA CON FOTOS) --- */
    $managers = [
        [
            'name' => 'Jstack Founder',
            'role_es' => 'CEO & Arquitecto de Software',
            'role_en' => 'CEO & Software Architect',
            'desc_es' => 'Lidera la visión técnica. Especialista en arquitectura escalable y desarrollo backend.',
            'desc_en' => 'Leads technical vision. Specialist in scalable architecture and backend dev.',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1000&auto=format&fit=crop', // FOTO
            'color' => 'text-sky-400',
            'border' => 'group-hover:border-sky-500/50',
            'gradient' => 'from-sky-500/20 to-blue-600/5'
        ],
        [
            'name' => 'Co-Founder',
            'role_es' => 'Gerente de Operaciones & Comercial',
            'role_en' => 'COO & Commercial Manager',
            'desc_es' => 'El estratega. Gestiona alianzas, contratos y asegura el éxito de cada entrega.',
            'desc_en' => 'The strategist. Manages alliances, contracts, and ensures delivery success.',
            'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1000&auto=format&fit=crop', // FOTO
            'color' => 'text-indigo-400',
            'border' => 'group-hover:border-indigo-500/50',
            'gradient' => 'from-indigo-500/20 to-purple-600/5'
        ]
    ];

    $developers = [
        [
            'name' => 'Lead Dev',
            'role' => 'Full Stack Senior',
            'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=500&auto=format&fit=crop',
            'tech' => ['Laravel', 'React', 'AWS']
        ],
        [
            'name' => 'Frontend Specialist',
            'role' => 'UI/UX Developer',
            'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=500&auto=format&fit=crop',
            'tech' => ['Vue', 'Tailwind', 'Motion']
        ],
        [
            'name' => 'Mobile Eng.',
            'role' => 'Mobile Developer',
            'image' => 'https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?q=80&w=500&auto=format&fit=crop',
            'tech' => ['Flutter', 'Swift', 'Kotlin']
        ]
    ];

    /* --- DATOS STICKY SCROLL --- */
    $philosophy = [
        [
            'id' => 'mission',
            'label' => $isEs ? 'Nuestra Misión' : 'Our Mission',
            'title_es' => 'Democratizar la Tecnología de Alto Nivel',
            'title_en' => 'Democratize High-Level Tech',
            'text_es' => 'No solo escribimos código; construimos puentes. Queremos que empresas de todos los tamaños accedan a sistemas con calidad de Silicon Valley, eliminando la barrera entre una idea y su ejecución digital perfecta.',
            'text_en' => 'We don\'t just write code; we build bridges. We want companies of all sizes to access Silicon Valley-quality systems, removing the barrier between an idea and its perfect digital execution.',
        ],
        [
            'id' => 'vision',
            'label' => $isEs ? 'Nuestra Visión' : 'Our Vision',
            'title_es' => 'Ser el Estándar de Innovación',
            'title_en' => 'Be the Innovation Standard',
            'text_es' => 'Aspiramos a ser la referencia en Latinoamérica donde la ingeniería robusta se encuentra con el diseño intuitivo. Un futuro donde Jstack sea sinónimo de software que simplemente funciona, escala y enamora.',
            'text_en' => 'We aspire to be the benchmark in LatAm where robust engineering meets intuitive design. A future where Jstack is synonymous with software that just works, scales, and captivates.',
        ],
        [
            'id' => 'values',
            'label' => $isEs ? 'Nuestros Valores' : 'Our Values',
            'title_es' => 'El Código de Jstack',
            'title_en' => 'The Jstack Code',
            'text_es' => 'Transparencia radical en costos. Obsesión por el rendimiento (cada milisegundo cuenta). Y sobre todo, diseño atómico: construimos sistemas modulares listos para el cambio.',
            'text_en' => 'Radical transparency in costs. Obsession with performance (every millisecond counts). And above all, atomic design: we build modular systems ready for change.',
        ]
    ];
@endphp

@push('head')
<style>
    /* --- STICKY SCROLL LOGIC --- */
    .about-sticky-wrapper { height: 300vh; }
    .about-sticky-content { position: sticky; top: 0; height: 100vh; overflow: hidden; }
    
    .text-slide {
        position: absolute; top: 50%; transform: translateY(-50%);
        opacity: 0; transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        filter: blur(10px); pointer-events: none;
    }
    .text-slide.active { opacity: 1; filter: blur(0); transform: translateY(-50%) scale(1); pointer-events: all; }
    .text-slide.prev { opacity: 0; transform: translateY(-100%) scale(0.9); }
    .text-slide.next { opacity: 0; transform: translateY(50%) scale(1.1); }

    .visual-artifact {
        position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;
        opacity: 0; transition: all 1s ease; transform: scale(0.8) rotate(-10deg);
    }
    .visual-artifact.active { opacity: 1; transform: scale(1) rotate(0deg); }

    @keyframes orbit { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
    
    .atom-ring { animation: orbit 10s linear infinite; }
    .atom-ring:nth-child(2) { animation-duration: 15s; animation-direction: reverse; }
    .floating-item { animation: float 6s ease-in-out infinite; }
</style>
@endpush

@section('content')

{{-- 1. HERO INTRO --}}
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-sky-600/10 blur-[120px] rounded-full pointer-events-none"></div>
    
    <div class="relative max-w-5xl mx-auto px-6 text-center z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-white/5 border border-white/10 text-sky-400 text-xs font-bold tracking-widest uppercase mb-6 animate-fade-up">
            {{ $isEs ? 'El ADN de Jstack' : 'The Jstack DNA' }}
        </span>
        <h1 class="text-5xl md:text-7xl font-bold text-white tracking-tight mb-8 leading-tight animate-fade-up" style="animation-delay: 0.1s">
            {{ $isEs ? 'Arquitectos de' : 'Architects of' }} <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-indigo-400 to-purple-400">
                {{ $isEs ? 'tu Realidad Digital.' : 'your Digital Reality.' }}
            </span>
        </h1>
        <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed animate-fade-up" style="animation-delay: 0.2s">
            {{ $isEs 
                ? 'Somos una agencia híbrida. Combinamos la precisión de la ingeniería de sistemas con la estrategia de negocio para crear software que no solo funciona, sino que escala.' 
                : 'We are a hybrid agency. We combine the precision of systems engineering with business strategy to build software that not only works but scales.' 
            }}
        </p>
    </div>
</section>

{{-- 2. EQUIPO (FOTOGRAFÍA PREMIUM) --}}
<section class="py-24 relative bg-white/[0.02] border-y border-white/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-3xl font-bold text-white mb-4">{{ $isEs ? 'Mentes Maestras' : 'Masterminds' }}</h2>
            <p class="text-slate-400 max-w-xl mx-auto">{{ $isEs ? 'Un equipo compacto de alto rendimiento.' : 'A compact, high-performance team.' }}</p>
        </div>

        {{-- NIVEL 1: GERENCIA (2 Cards Grandes con FOTO) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-24 max-w-5xl mx-auto">
            @foreach($managers as $manager)
                <div class="group relative rounded-3xl bg-[#0a0a0a] border border-white/5 overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    
                    {{-- Glow de fondo al hacer hover --}}
                    <div class="absolute inset-0 bg-gradient-to-br {{ $manager['gradient'] }} opacity-0 group-hover:opacity-30 transition duration-700 blur-2xl"></div>
                    
                    <div class="relative p-8">
                        {{-- Contenedor de Imagen --}}
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-2xl mb-8 border border-white/10 {{ $manager['border'] }} transition duration-500">
                            {{-- Overlay Gradiente para texto sobre imagen (opcional) --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent opacity-60 z-10"></div>
                            
                            {{-- La Imagen (Grayscale por defecto, color al hover) --}}
                            <img src="{{ $manager['image'] }}" alt="{{ $manager['name'] }}" 
                                 class="w-full h-full object-cover transition duration-700 transform group-hover:scale-105 filter grayscale group-hover:grayscale-0">
                        </div>

                        <div class="relative z-20">
                            <h3 class="text-3xl font-bold text-white mb-2">{{ $manager['name'] }}</h3>
                            <span class="text-sm font-bold {{ $manager['color'] }} tracking-wide uppercase mb-4 block">{{ $isEs ? $manager['role_es'] : $manager['role_en'] }}</span>
                            <p class="text-slate-400 leading-relaxed text-sm">{{ $isEs ? $manager['desc_es'] : $manager['desc_en'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- NIVEL 2: DESARROLLADORES (3 Cards Perfil) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach($developers as $dev)
                <div class="group relative bg-[#0a0a0a] border border-white/5 rounded-3xl p-8 flex flex-col items-center text-center transition-all duration-300 hover:border-white/10 hover:bg-white/[0.02]">
                    
                    {{-- Foto Circular con Anillo --}}
                    <div class="relative mb-6">
                        <div class="w-24 h-24 rounded-full p-1 bg-gradient-to-br from-white/10 to-transparent group-hover:from-emerald-500/50 group-hover:to-sky-500/50 transition duration-500">
                            <img src="{{ $dev['image'] }}" alt="{{ $dev['name'] }}" class="w-full h-full rounded-full object-cover border-2 border-[#0a0a0a]">
                        </div>
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-[#0a0a0a] rounded-full flex items-center justify-center">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                        </div>
                    </div>

                    <h4 class="text-xl font-bold text-white mb-1">{{ $dev['name'] }}</h4>
                    <span class="text-xs text-slate-500 font-medium tracking-wider uppercase mb-6">{{ $dev['role'] }}</span>
                    
                    <div class="flex flex-wrap justify-center gap-2 w-full">
                        @foreach($dev['tech'] as $tech)
                            <span class="px-3 py-1 rounded-full bg-white/5 text-[11px] text-slate-300 border border-white/5 group-hover:border-white/10 transition">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 3. STICKY SCROLL STORYTELLING --}}
<section class="about-sticky-wrapper relative bg-slate-950">
    <div class="about-sticky-content flex items-center">
        
        <div class="w-full max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center h-full">
            
            {{-- IZQUIERDA: TEXTO --}}
            <div class="relative h-[400px] order-2 lg:order-1">
                @foreach($philosophy as $index => $item)
                    <div class="text-slide text-slide-{{ $index }} w-full" id="text-{{ $index }}">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-px w-8 bg-sky-500"></span>
                            <span class="text-sky-500 font-bold tracking-widest text-sm uppercase">{{ $item['label'] }}</span>
                        </div>
                        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                            {{ $isEs ? $item['title_es'] : $item['title_en'] }}
                        </h2>
                        <p class="text-lg text-slate-400 leading-relaxed max-w-lg">
                            {{ $isEs ? $item['text_es'] : $item['text_en'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            {{-- DERECHA: VISUALES --}}
            <div class="relative h-[400px] lg:h-[500px] w-full order-1 lg:order-2 flex items-center justify-center perspective-1000">
                
                {{-- VISUAL 1: MISIÓN --}}
                <div class="visual-artifact visual-0" id="visual-0">
                    <div class="relative w-64 h-64 floating-item">
                        <div class="absolute inset-0 bg-gradient-to-tr from-sky-600 to-indigo-600 rounded-full blur-2xl opacity-40"></div>
                        <div class="relative w-full h-full bg-slate-900/50 border border-white/10 backdrop-blur-md rounded-full flex items-center justify-center shadow-2xl">
                            <svg class="w-32 h-32 text-sky-400 drop-shadow-[0_0_15px_rgba(56,189,248,0.5)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.619-8.95a6 6 0 01-8.8-1.44M9.631 8.41a11.72 11.72 0 00-4.18 5.96" />
                            </svg>
                        </div>
                        <div class="absolute inset-[-20px] border border-sky-500/20 rounded-full atom-ring"></div>
                    </div>
                </div>

                {{-- VISUAL 2: VISIÓN --}}
                <div class="visual-artifact visual-1" id="visual-1">
                    <div class="relative w-72 h-48">
                        <div class="absolute inset-0 bg-purple-600/20 blur-3xl rounded-full"></div>
                        <div class="absolute bottom-0 w-full h-24 bg-gradient-to-t from-purple-500/10 to-transparent" 
                             style="background-image: linear-gradient(0deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent); background-size: 30px 30px; transform: perspective(500px) rotateX(60deg);"></div>
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-32 bg-white rounded-full shadow-[0_0_60px_rgba(168,85,247,0.6)] flex items-center justify-center floating-item">
                            <div class="w-28 h-28 bg-slate-950 rounded-full flex items-center justify-center relative overflow-hidden">
                                <div class="absolute w-full h-1 bg-purple-500/50 top-1/2 animate-pulse"></div>
                                <div class="absolute w-1 h-full bg-purple-500/50 left-1/2 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VISUAL 3: VALORES --}}
                <div class="visual-artifact visual-2" id="visual-2">
                    <div class="relative w-60 h-60">
                        <div class="absolute inset-0 bg-emerald-500/10 blur-3xl rounded-full"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-gradient-to-br from-emerald-400 to-teal-600 rounded-xl transform rotate-45 shadow-2xl floating-item z-10"></div>
                        <div class="absolute top-0 left-0 w-12 h-12 bg-slate-800 border border-white/10 rounded-lg floating-item" style="animation-delay: 0.5s;"></div>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-slate-800 border border-white/10 rounded-lg floating-item" style="animation-delay: 1s;"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- 4. CTA FINAL --}}
<section class="py-32 relative overflow-hidden">
    <div class="relative max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-8 tracking-tight">
            {{ $isEs ? '¿Hablamos de Futuro?' : 'Let\'s Talk Future' }}
        </h2>
        <p class="text-lg text-slate-400 mb-10 max-w-2xl mx-auto">
            {{ $isEs 
                ? 'Tu idea es el combustible. Nosotros construimos el cohete. Agendemos una reunión de 15 minutos para ver si somos el fit perfecto.' 
                : 'Your idea is the fuel. We build the rocket. Let\'s schedule a 15-minute meeting to see if we are the perfect fit.' 
            }}
        </p>
        <a href="{{ route('home') }}#contact" class="inline-flex items-center gap-3 bg-white text-slate-900 px-10 py-4 rounded-full font-bold text-lg hover:bg-sky-50 transition hover:scale-105 shadow-[0_0_30px_rgba(255,255,255,0.2)]">
            {{ $isEs ? 'Agendar Llamada' : 'Schedule Call' }}
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </a>
    </div>
</section>

{{-- SCRIPTS --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.querySelector('.about-sticky-wrapper');
    const totalSlides = 3;

    function handleScroll() {
        if (!wrapper) return;
        
        const rect = wrapper.getBoundingClientRect();
        const viewportHeight = window.innerHeight;
        const rawProgress = (-rect.top) / (rect.height - viewportHeight);
        let progress = Math.max(0, Math.min(1, rawProgress));
        
        let activeIndex = Math.floor(progress * totalSlides);
        if (activeIndex >= totalSlides) activeIndex = totalSlides - 1;

        for (let i = 0; i < totalSlides; i++) {
            const textEl = document.getElementById(`text-${i}`);
            const visualEl = document.getElementById(`visual-${i}`);
            
            textEl.classList.remove('active', 'prev', 'next');
            visualEl.classList.remove('active');

            if (i === activeIndex) {
                textEl.classList.add('active');
                visualEl.classList.add('active');
            } else if (i < activeIndex) {
                textEl.classList.add('prev');
            } else {
                textEl.classList.add('next');
            }
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
});
</script>

@endsection