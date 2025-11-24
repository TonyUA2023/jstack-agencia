@extends('layouts.public')

@section('title', app()->getLocale() === 'es' ? 'Inicio' : 'Home')

@push('head')
<style>
    /* --- ESTILOS BASE TIPO APPLE --- */
    html, body {
        background-color: #050505;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    /* --- ANIMACIONES DE ENTRADA (REVEAL) --- */
    .reveal-text {
        opacity: 0;
        transform: translateY(40px);
        transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .is-visible .reveal-text {
        opacity: 1;
        transform: translateY(0);
    }
    .delay-200 { transition-delay: 0.2s; }
    .delay-400 { transition-delay: 0.4s; }
    .delay-600 { transition-delay: 0.6s; }


    /* --- ESTILOS ORBIT 3D --- */
    .orbit-container {
        perspective: 1000px;
        overflow: visible;
        position: relative;
        height: 450px;
        width: 100%;
        max-width: 1000px;
    }

    .orbit-item {
        position: absolute;
        top: 50%;
        left: 50%;
        transform-style: preserve-3d;
        will-change: transform, opacity, z-index; /* Optimización */
        transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0.6s ease;
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.8);
        /* Aseguramos que no se vea el reverso por si acaso, aunque ya no rotamos */
        backface-visibility: hidden; 
    }
</style>
@endpush

@section('content')
@php
    $isEs = app()->getLocale() === 'es';

    $projects = [
        [
            'img' => 'tractoleo.png',
            'title_es' => 'Tracto Leo Import',
            'title_en' => 'Tracto Leo Import',
        ],
        [
            'img' => 'wayra.png',
            'title_es' => 'Wayra Mobile Detailing',
            'title_en' => 'Wayra Mobile Detailing',
        ],
        [
            'img' => 'merino.png',
            'title_es' => 'Grupo Merino Ingenieros',
            'title_en' => 'Merino Engineers Group',
        ],
        [
            'img' => 'laurent.png',
            'title_es' => 'Clínica Visual Laurent',
            'title_en' => 'Laurent Visual Clinic',
        ],
        [
            'img' => 'cesars.png',
            'title_es' => 'Cesar\'s Carwash',
            'title_en' => 'Cesar\'s Carwash',
        ],
    ];
@endphp

{{-- SECCIÓN HERO --}}
<section id="hero" class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden bg-black py-20 reveal-trigger">

    {{-- FONDO --}}
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-[#050505] to-black pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.12] bg-[url('https://grainy-gradients.vercel.app/noise.svg')] pointer-events-none mix-blend-overlay"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[1000px] h-[600px] md:h-[1000px] rounded-full blur-[180px] opacity-20 pointer-events-none animate-pulse bg-sky-600"></div>

    {{-- CONTENIDO --}}
    <div class="relative z-10 container mx-auto px-6 flex flex-col items-center justify-center h-full">

        <div class="text-center max-w-5xl mx-auto relative z-20">
            <h1 class="reveal-text delay-200 text-7xl md:text-9xl font-black tracking-tighter text-white leading-none mb-8">
                @if($isEs)
                    Experiencias <br><span class="text-transparent bg-clip-text bg-gradient-to-br from-white to-slate-400">claras y modernas.</span>
                @else
                    Clear, modern <br><span class="text-transparent bg-clip-text bg-gradient-to-br from-white to-slate-400">experiences.</span>
                @endif
            </h1>

            <div class="reveal-text delay-600 mt-10">
                 <a href="#contact" class="inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-500 text-white font-bold px-8 py-4 rounded-full transition-all transform hover:scale-105 shadow-lg shadow-sky-900/30 group">
                    <span>{{ $isEs ? 'Agenda una llamada' : 'Schedule a call' }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-transform">
                        <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
 
        <div class="orbit-container mx-auto z-20 reveal-text delay-600">

            {{-- Items del Orbit (Sin cambios aquí) --}}
            @foreach($projects as $i => $p)
                <div class="orbit-item
                            w-48 h-28 -ml-24 -mt-14
                            md:w-[380px] md:h-[215px] md:-ml-[190px] md:-mt-[107px]
                            rounded-2xl overflow-hidden border border-white/10 bg-slate-950 group cursor-pointer"
                     data-orbit="{{ $i }}">

                    <img src="{{ asset('images/projects/' . $p['img']) }}"
                         class="h-full w-full object-cover opacity-70 group-hover:opacity-100 transition duration-500 scale-100 group-hover:scale-105"
                         alt="{{ $p['title_en'] }}">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60"></div>
                </div>
            @endforeach

            {{-- Caja de Info + Controles Integrados --}}
            <div id="project-info" class="absolute -bottom-16 left-1/2 -translate-x-1/2 w-[90%] md:w-[450px] rounded-2xl bg-black/80 backdrop-blur-xl border border-white/10 p-5 shadow-2xl text-center z-50 transition-all duration-300">
                
                {{-- Título --}}
                <h3 id="project-title" class="text-xl font-bold text-white mb-3 tracking-tight"></h3>
                
                {{-- Contenedor Flex: Botón Atrás - Puntos - Botón Siguiente --}}
                <div class="flex items-center justify-center gap-6">
                    
                    {{-- Botón Anterior --}}
                    <button id="prev-btn" class="p-2 rounded-full bg-white/5 border border-white/10 text-white hover:bg-sky-600 hover:border-sky-500 transition group" aria-label="Anterior">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:-translate-x-0.5 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    {{-- Puntos --}}
                    <div class="flex justify-center gap-2">
                        @foreach($projects as $idx => $pj)
                            <div class="indicator-dot w-2 h-2 rounded-full bg-white/20 transition-colors" id="dot-{{$idx}}"></div>
                        @endforeach
                    </div>

                    {{-- Botón Siguiente --}}
                    <button id="next-btn" class="p-2 rounded-full bg-white/5 border border-white/10 text-white hover:bg-sky-600 hover:border-sky-500 transition group" aria-label="Siguiente">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- SCRIPTS --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
    // Reveal animation
    const triggers = document.querySelectorAll('.reveal-trigger');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('is-visible');
        });
    }, { threshold: 0.2 });
    triggers.forEach(trigger => observer.observe(trigger));
});

document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".orbit-item");
    const infoTitle = document.getElementById("project-title");
    // const infoDesc = document.getElementById("project-desc"); // ELIMINADO
    const dots = document.querySelectorAll(".indicator-dot");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    const projects = @json($projects);
    const isEs = {{ $isEs ? 'true' : 'false' }};

    let current = 0;
    const total = items.length;
    let interval;

    function render() {
        const w = window.innerWidth;
        let radius = w < 640 ? 150 : 360;

        items.forEach((item, i) => {
            const angle = (360 / total) * (i - current);
            const rad = angle * (Math.PI / 180);

            const x = Math.sin(rad) * radius;
            const z = Math.cos(rad) * radius;

            const depthNormal = (z + radius) / (2 * radius);
            const opacity = 0.3 + (0.7 * depthNormal);
            const scale = 0.6 + (0.4 * depthNormal); 
            const yShift = 0; 

            // CORRECCIÓN PRINCIPAL: Eliminado rotateY para evitar inversión
            item.style.transform = `translate3d(${x}px, ${yShift}px, ${z}px) scale(${scale})`; 
            
            item.style.opacity = opacity;
            // z-index crítico para que las tarjetas de atrás no tapen a las de adelante
            item.style.zIndex = Math.round(z + radius + 1000); 

            // Estilos del ítem activo
            if (Math.abs(angle % 360) < 10) {
                item.style.borderColor = 'rgba(14, 165, 233, 0.8)';
                item.style.boxShadow = '0 20px 60px -10px rgba(14, 165, 233, 0.4)';
            } else {
                item.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                item.style.boxShadow = 'none';
            }
        });

        const index = ((current % total) + total) % total;
        const p = projects[index];

        infoTitle.style.opacity = 0.3;
        
        setTimeout(() => {
            infoTitle.textContent = isEs ? p.title_es : p.title_en;
            // infoDesc lines removed
            infoTitle.style.opacity = 1;

            dots.forEach((d, idx) => {
                d.classList.toggle('bg-sky-500', idx === index);
                d.classList.toggle('bg-white/20', idx !== index);
            });
        }, 150);
    }

    function resetTimer() {
        clearInterval(interval);
        interval = setInterval(() => { current++; render(); }, 3500);
    }

    nextBtn.addEventListener('click', () => { current++; render(); resetTimer(); });
    prevBtn.addEventListener('click', () => { current--; render(); resetTimer(); });

    interval = setInterval(() => { current++; render(); }, 3500);
    
    const container = document.querySelector('.orbit-container');
    container.addEventListener('mouseenter', () => clearInterval(interval));
    container.addEventListener('mouseleave', () => resetTimer());

    render();
    window.addEventListener('resize', render);
});
</script>

@include('public.partials.services')
@include('public.partials.cards')
@include('public.partials.contact')
@endsection