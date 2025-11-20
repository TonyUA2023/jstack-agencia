@extends('layouts.public')

@section('title', app()->getLocale() === 'es' ? 'Inicio' : 'Home')

@push('head')
<style>
    .orbit-container {
        perspective: 1000px;
        overflow: visible;
    }

    .orbit-item {
        position: absolute;
        top: 50%;
        left: 50%;
        transform-style: preserve-3d;
        will-change: transform, opacity;
        transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0.6s ease;
        box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.8);
    }

    .glow-oval {
        filter: blur(90px);
        opacity: 0.4;
    }
</style>
@endpush

@section('content')
@php
    $isEs = app()->getLocale() === 'es';

    $projects = [
        [
            'img' => 'project1.jpg',
            'title_es' => 'Sistema de Inventarios',
            'title_en' => 'Inventory Management System',
            'desc_es' => 'Control de stock, movimientos y reportes en tiempo real.',
            'desc_en' => 'Real-time stock, movement and reporting control.',
        ],
        [
            'img' => 'project2.jpg',
            'title_es' => 'Landing Comercial',
            'title_en' => 'Commercial Landing',
            'desc_es' => 'Diseñado para captar leads con alta conversión.',
            'desc_en' => 'Designed to capture high-conversion leads.',
        ],
        [
            'img' => 'project3.jpg',
            'title_es' => 'Plataforma Web Empresarial',
            'title_en' => 'Business Web Platform',
            'desc_es' => 'Módulos personalizados según el flujo del negocio.',
            'desc_en' => 'Custom modules built around business workflow.',
        ],
        [
            'img' => 'project4.jpg',
            'title_es' => 'Sistema Administrativo',
            'title_en' => 'Admin System',
            'desc_es' => 'Procesos internos automatizados y medibles.',
            'desc_en' => 'Automated and measurable internal processes.',
        ],
    ];
@endphp

<section id="hero" class="relative min-h-screen flex flex-col justify-center items-center overflow-hidden bg-slate-950 py-20">

    {{-- Fondo Decorativo --}}
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="w-[300px] h-[300px] md:w-[600px] md:h-[400px] rounded-full bg-sky-600/15 glow-oval"></div>
    </div>

    {{-- Texto Principal --}}
    <div class="relative z-40 text-center max-w-4xl px-6 space-y-5 mb-8">
        <h1 class="text-3xl md:text-5xl font-bold leading-tight text-white tracking-tight">
            @if($isEs)
                Experiencias digitales <span class="text-sky-400">claras y modernas</span>
            @else
                Clear, modern <span class="text-sky-400">digital experiences</span>
            @endif
        </h1>

        <p class="text-slate-400 text-sm md:text-lg max-w-2xl mx-auto font-light">
            {{ $isEs ? 'Desarrollo plataformas web y sistemas hechos a medida, combinando diseño minimalista con arquitectura sólida.' : 'I build custom web platforms and systems, combining minimalist design with solid architecture.' }}
        </p>
        
        <div class="flex justify-center gap-4 pt-2">
             <a href="#contact" class="bg-sky-600 px-6 py-2.5 rounded-full text-sm font-bold text-white shadow-lg shadow-sky-900/50 hover:bg-sky-500 transition transform hover:scale-105">
                {{ $isEs ? 'Agenda una llamada' : 'Schedule a call' }}
            </a>
            <a href="#projects" class="px-6 py-2.5 rounded-full border border-white/10 bg-white/5 text-sm font-medium text-slate-200 hover:bg-white/10 hover:border-sky-400 transition">
                {{ $isEs ? 'Ver proyectos' : 'View projects' }}
            </a>
        </div>
    </div>

    {{-- CONTENEDOR 3D --}}
    <div class="relative w-full max-w-[1000px] h-[350px] md:h-[450px] orbit-container mx-auto z-20 mt-4">

        {{-- 
            BOTONES DE NAVEGACIÓN (NUEVOS)
            Están posicionados absolutamente a la izquierda y derecha.
            Usan z-50 para asegurarse de estar sobre las tarjetas si giran cerca.
        --}}
        <button id="prev-btn" 
                class="absolute left-2 md:left-10 top-1/3 md:top-1/2 z-50 p-3 rounded-full bg-slate-800/50 border border-white/10 text-white hover:bg-sky-600 hover:border-sky-500 transition backdrop-blur-md shadow-lg group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 group-hover:-translate-x-0.5 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>

        <button id="next-btn" 
                class="absolute right-2 md:right-10 top-1/3 md:top-1/2 z-50 p-3 rounded-full bg-slate-800/50 border border-white/10 text-white hover:bg-sky-600 hover:border-sky-500 transition backdrop-blur-md shadow-lg group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 group-hover:translate-x-0.5 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>

        @foreach($projects as $i => $p)
            <div class="orbit-item 
                        w-48 h-28 -ml-24 -mt-14 
                        md:w-[380px] md:h-[215px] md:-ml-[190px] md:-mt-[107px]
                        rounded-xl overflow-hidden border border-white/10 bg-slate-900 group cursor-pointer"
                 data-orbit="{{ $i }}">
                 
                <img src="{{ asset('images/projects/' . $p['img']) }}" 
                     class="h-full w-full object-cover opacity-70 group-hover:opacity-100 transition duration-500"
                     alt="Project">
                
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
            </div>
        @endforeach

        {{-- CAJA DE TEXTO --}}
        <div id="project-info"
             class="absolute bottom-0 left-1/2 -translate-x-1/2 
                    w-[90%] md:w-[450px] 
                    rounded-xl bg-slate-900/90 backdrop-blur-md border border-white/10 
                    p-4 shadow-xl text-center z-50 transition-all duration-300">
            
            <h3 id="project-title" class="text-lg md:text-xl font-bold text-white mb-1"></h3>
            <p id="project-desc" class="text-xs md:text-sm text-slate-400"></p>
            
            <div class="mt-3 flex justify-center gap-2">
                @foreach($projects as $idx => $pj)
                    {{-- Agregamos cursor-pointer para que los dots también sirvan de navegación si quieres --}}
                    <div class="indicator-dot w-1.5 h-1.5 rounded-full bg-white/20 transition-colors" id="dot-{{$idx}}"></div>
                @endforeach
            </div>
        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".orbit-item");
    const infoTitle = document.getElementById("project-title");
    const infoDesc = document.getElementById("project-desc");
    const dots = document.querySelectorAll(".indicator-dot");
    
    // Seleccionamos los botones
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    const projects = @json($projects);
    const isEs = {{ $isEs ? 'true' : 'false' }};

    let current = 0;
    const total = items.length;
    let interval; // Variable para guardar el intervalo

    function render() {
        const w = window.innerWidth;
        let radius;
        
        if (w < 640) {
            radius = 150; 
        } else {
            radius = 340; 
        }

        items.forEach((item, i) => {
            const angle = (360 / total) * (i - current);
            const rad = angle * (Math.PI / 180);

            const x = Math.sin(rad) * radius;
            const z = Math.cos(rad) * radius; 

            const depthNormal = (z + radius) / (2 * radius);
            const opacity = 0.4 + (0.6 * depthNormal); 
            const scale = 0.7 + (0.3 * depthNormal); 
            const yShift = -50; 

            item.style.transform = `translate3d(${x}px, ${yShift}px, ${z}px) rotateY(${angle}deg) scale(${scale})`;
            item.style.opacity = opacity;
            item.style.zIndex = Math.round(z + radius); 

            if (Math.abs(angle % 360) < 10) {
                item.style.borderColor = 'rgba(14, 165, 233, 0.6)';
                item.style.boxShadow = '0 0 30px rgba(14, 165, 233, 0.2)';
            } else {
                item.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                item.style.boxShadow = 'none';
            }
        });

        const index = ((current % total) + total) % total;
        const p = projects[index];

        infoTitle.style.opacity = 0.5;
        setTimeout(() => {
            infoTitle.textContent = isEs ? p.title_es : p.title_en;
            infoDesc.textContent = isEs ? p.desc_es : p.desc_en;
            infoTitle.style.opacity = 1;
            
            dots.forEach((d, idx) => {
                d.classList.toggle('bg-sky-500', idx === index);
                d.classList.toggle('bg-white/20', idx !== index);
            });
        }, 100);
    }

    // Función para reiniciar el timer automático al hacer click
    function resetTimer() {
        clearInterval(interval);
        interval = setInterval(() => {
            current++;
            render();
        }, 3500);
    }

    // Event Listeners Botones
    nextBtn.addEventListener('click', () => {
        current++;
        render();
        resetTimer(); // Reiniciamos la cuenta regresiva automática
    });

    prevBtn.addEventListener('click', () => {
        current--;
        render();
        resetTimer();
    });

    // Iniciar loop
    interval = setInterval(() => {
        current++;
        render();
    }, 3500);

    const container = document.querySelector('.orbit-container');
    container.addEventListener('mouseenter', () => clearInterval(interval));
    container.addEventListener('mouseleave', () => resetTimer());

    render();
    window.addEventListener('resize', render);
});
</script>
@include('public.partials.services')
@endsection