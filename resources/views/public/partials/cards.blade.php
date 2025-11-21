@php
    $isEs = app()->getLocale() === 'es';

    // Definición de las 3 tarjetas
    $cards = [
        [
            'id' => 'card-web',
            'subtitle_es' => 'Fundamentos Digitales',
            'subtitle_en' => 'Digital Foundations',
            'title_es' => 'Diseño & Estrategia Web',
            'title_en' => 'Web Design & Strategy',
            'desc_es' => 'Proyectos a medida que definen tu presencia. Desde landings de alto impacto hasta sitios corporativos complejos.',
            'desc_en' => 'Custom projects that define your presence. From high-impact landings to complex corporate sites.',
            'has_price' => false,
            'cta_es' => 'Consultar Proyecto',
            'cta_en' => 'Inquire Project',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />'
        ],
        [
            'id' => 'card-saas',
            'subtitle_es' => 'Automatización',
            'subtitle_en' => 'Automation',
            'title_es' => 'Plataformas SaaS a Medida',
            'title_en' => 'Custom SaaS Platforms',
            'desc_es' => 'Sistemas que escalan con tu negocio. Automatiza procesos y obtén control total de tus operaciones.',
            'desc_en' => 'Systems that scale with your business. Automate processes and gain full control of operations.',
            'has_price' => false,
            'cta_es' => 'Hablar con Ventas',
            'cta_en' => 'Talk to Sales',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />'
        ],
        [
            'id' => 'card-nfc',
            // Esta es la tarjeta destacada con precio
            'highlight' => true,
            'subtitle_es' => 'El Híbrido Definitivo',
            'subtitle_en' => 'The Ultimate Hybrid',
            'title_es' => 'NFC + Identidad Digital',
            'title_en' => 'NFC + Digital Identity',
            'desc_es' => 'Conecta el mundo físico con el digital. Tarjetas premium de metal/madera con tecnología Jstack integrada.',
            'desc_en' => 'Connect physical and digital worlds. Premium metal/wood cards with integrated Jstack technology.',
            'has_price' => true,
            'price' => '$299',
            'price_detail_es' => 'Pago único. Envío incluido.',
            'price_detail_en' => 'One-time payment. Shipping included.',
            'cta_es' => 'Comprar Paquete',
            'cta_en' => 'Buy Package',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />'
        ]
    ];
@endphp

@push('head')
<style>
    /* Altura total de la sección de scroll */
    .apple-scroll-track { height: 450vh; }

    /* Estilo base de las tarjetas Apple-esque */
    .apple-card {
        /* Fondo oscuro tipo "frosted glass" */
        background: rgba(28, 28, 30, 0.7);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 32px;
        padding: 40px;
        display: flex;
        flex-direction: column;
        /* Sombra suave y difusa */
        box-shadow: 0 20px 40px -15px rgba(0,0,0,0.5);
        /* Transiciones ultra suaves para la física del scroll */
        transition: transform 0.1s linear, opacity 0.1s linear;
        will-change: transform, opacity;
    }

    /* Tarjeta destacada (NFC) */
    .apple-card.highlight {
        background: rgba(44, 44, 46, 0.8); /* Un poco más clara */
        border-color: rgba(255, 255, 255, 0.15);
        box-shadow: 0 30px 60px -20px rgba(14, 165, 233, 0.15); /* Sombra azulada sutil */
    }

    /* Botones estilo Apple */
    .apple-btn {
        display: inline-flex; items-center; justify-center;
        padding: 12px 24px; border-radius: 100px;
        font-weight: 600; font-size: 15px; transition: all 0.3s ease;
    }
    .apple-btn-primary { background: #fff; color: #000; }
    .apple-btn-primary:hover { background: #e5e5e5; transform: scale(1.02); }
    .apple-btn-secondary { background: rgba(255,255,255,0.1); color: #fff; }
    .apple-btn-secondary:hover { background: rgba(255,255,255,0.15); }

    /* Estados iniciales para la animación de escritorio */
    @media (min-width: 1024px) {
        /* Card 1: Empieza visible pero ligeramente desplazada */
        .card-0 { transform: translateX(0); opacity: 1; z-index: 10; }
        /* Card 2: Empieza fuera de pantalla a la derecha y transparente */
        .card-1 { transform: translateX(150%) scale(0.9); opacity: 0; z-index: 20; }
        /* Card 3: Empieza más lejos aún */
        .card-2 { transform: translateX(250%) scale(0.9); opacity: 0; z-index: 30; }
    }
</style>
@endpush

{{-- 
    =============================================
    VISTA MÓVIL (Sin sticky complex, lista limpia)
    ============================================= 
--}}
<div class="lg:hidden bg-black py-20 px-6 space-y-8">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-white mb-4">{{ $isEs ? 'Nuestros Paquetes' : 'Our Packages' }}</h2>
        <p class="text-slate-400">{{ $isEs ? 'Claridad y potencia para cada etapa.' : 'Clarity and power for every stage.' }}</p>
    </div>
    @foreach($cards as $card)
        <div class="apple-card {{ isset($card['highlight']) ? 'highlight' : '' }}">
            <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-white mb-6">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">{!! $card['icon'] !!}</svg>
            </div>
            <span class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">{{ $isEs ? $card['subtitle_es'] : $card['subtitle_en'] }}</span>
            <h3 class="text-2xl font-bold text-white mb-4">{{ $isEs ? $card['title_es'] : $card['title_en'] }}</h3>
            <p class="text-slate-400 mb-8 leading-relaxed">{{ $isEs ? $card['desc_es'] : $card['desc_en'] }}</p>
            
            <div class="mt-auto">
                @if($card['has_price'])
                    <div class="mb-8">
                        <div class="flex items-baseline">
                            <span class="text-5xl font-black text-white tracking-tight">{{ $card['price'] }}</span>
                        </div>
                        <p class="text-sm text-slate-400 mt-2">{{ $isEs ? $card['price_detail_es'] : $card['price_detail_en'] }}</p>
                    </div>
                    <a href="#contact" class="apple-btn apple-btn-primary w-full">{{ $isEs ? $card['cta_es'] : $card['cta_en'] }}</a>
                @else
                    <a href="#contact" class="apple-btn apple-btn-secondary w-full">{{ $isEs ? $card['cta_es'] : $card['cta_en'] }}</a>
                @endif
            </div>
        </div>
    @endforeach
</div>


{{-- 
    =============================================
    VISTA ESCRITORIO (Sticky Animation Estilo Apple)
    ============================================= 
--}}
<section class="hidden lg:block relative bg-black apple-scroll-track">
    <div class="sticky top-0 h-screen overflow-hidden flex flex-col items-center justify-center">
        
        {{-- Header de la sección (se desvanece al hacer scroll) --}}
        <div class="cards-header text-center mb-16 transition-all duration-500 relative z-50">
            <h2 class="text-5xl font-bold text-white mb-4 tracking-tight">{{ $isEs ? 'Elige tu nivel.' : 'Choose your tier.' }}</h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">{{ $isEs ? 'Estructura clara. Sin letra chica. Solo resultados.' : 'Clear structure. No fine print. Just results.' }}</p>
        </div>

        {{-- Contenedor de las tarjetas --}}
        {{-- Usamos un grid para mantener el layout base, pero JS moverá las tarjetas --}}
        <div class="cards-container relative w-full max-w-7xl px-8 h-[600px] flex items-stretch justify-center">
            @foreach($cards as $index => $card)
                {{-- 
                   Cada tarjeta es 'absolute' para poder moverla libremente con transforms.
                   El ancho es fijo (w-[380px]) para que quepan las 3.
                   Se añade la clase 'card-X' para identificarla en JS.
                --}}
                <div class="apple-card card-{{ $index }} absolute top-0 w-[380px] h-full {{ isset($card['highlight']) ? 'highlight' : '' }}">
                    
                    {{-- Icono --}}
                    <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center text-white mb-8">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">{!! $card['icon'] !!}</svg>
                    </div>

                    {{-- Contenido --}}
                    <div class="flex-1">
                        <span class="text-sm font-bold text-sky-500 uppercase tracking-widest mb-3 block">
                            {{ $isEs ? $card['subtitle_es'] : $card['subtitle_en'] }}
                        </span>
                        <h3 class="text-3xl font-bold text-white mb-5 leading-tight">
                            {{ $isEs ? $card['title_es'] : $card['title_en'] }}
                        </h3>
                        <p class="text-lg text-slate-400 leading-relaxed">
                            {{ $isEs ? $card['desc_es'] : $card['desc_en'] }}
                        </p>
                    </div>
                    
                    {{-- Footer (Precio / Botón) --}}
                    <div class="mt-10 border-t border-white/10 pt-10">
                        @if($card['has_price'])
                            <div class="mb-8">
                                <div class="flex items-baseline">
                                    <span class="text-6xl font-black text-white tracking-tight">{{ $card['price'] }}</span>
                                </div>
                                <p class="text-base font-medium text-slate-400 mt-2">{{ $isEs ? $card['price_detail_es'] : $card['price_detail_en'] }}</p>
                            </div>
                            <a href="#contact" class="apple-btn apple-btn-primary w-full text-lg py-4">
                                {{ $isEs ? $card['cta_es'] : $card['cta_en'] }}
                            </a>
                        @else
                            <a href="#contact" class="apple-btn apple-btn-secondary w-full text-lg py-4">
                                {{ $isEs ? $card['cta_es'] : $card['cta_en'] }}
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    if (window.innerWidth < 1024) return; // Solo escritorio

    const track = document.querySelector('.apple-scroll-track');
    const header = document.querySelector('.cards-header');
    const card0 = document.querySelector('.card-0');
    const card1 = document.querySelector('.card-1');
    const card2 = document.querySelector('.card-2');

    // Función de Easing para suavizar el movimiento (tipo Apple)
    // easeOutCubic: Empieza rápido, frena suave al final.
    const easeOutCubic = x => 1 - Math.pow(1 - x, 3);

    function handleAppleScroll() {
        const rect = track.getBoundingClientRect();
        const viewportHeight = window.innerHeight;
        // Calculamos el progreso del scroll dentro del track (0.0 a 1.0)
        // Restamos un pequeño offset para que empiece justo cuando el header se fija
        const rawProgress = (-rect.top) / (rect.height - viewportHeight);
        let progress = Math.max(0, Math.min(1, rawProgress)); // Clamp entre 0 y 1

        // 1. Animación del Header (Se desvanece y sube un poco al empezar)
        if (progress > 0.05) {
            header.style.opacity = 1 - (progress * 3); // Se desvanece rápido
            header.style.transform = `translateY(-${progress * 100}px)`;
        } else {
            header.style.opacity = 1;
            header.style.transform = 'translateY(0)';
        }

        // 2. Orquestación de las Tarjetas
        
        // Posiciones base en pantalla (en píxeles desde el centro)
        // Queremos que al final queden centradas: Card0 | Card1 | Card2
        const centerOffset = window.innerWidth / 2;
        const cardWidth = 380;
        const gap = 40;
        // Posiciones finales objetivo (relativas al centro del contenedor)
        const finalPos0 = -(cardWidth + gap); // Izquierda
        const finalPos1 = 0; // Centro
        const finalPos2 = (cardWidth + gap); // Derecha

        // --- FASE 1: Entrada de la Card 2 (Progress 0.0 - 0.5) ---
        // La Card 1 se mueve a la izquierda, la Card 2 entra desde la derecha.
        if (progress <= 0.5) {
            // Normalizamos el progreso de esta fase a 0.0 - 1.0
            const phaseProgress = easeOutCubic(progress * 2); 

            // Card 0 se mueve de 0 a su posición final izquierda
            const x0 = finalPos0 * phaseProgress;
            card0.style.transform = `translate3d(calc(-50% + ${x0}px), 0, 0)`;

            // Card 1 entra desde la derecha (150vw) hasta el centro (0)
            // Usamos un valor grande inicial (e.g., 1000px) y lo reducimos a 0
            const startX1 = window.innerWidth * 0.8; // Empieza fuera
            const x1 = startX1 * (1 - phaseProgress);
            const scale1 = 0.9 + (0.1 * phaseProgress); // De 0.9 a 1.0
            const opacity1 = phaseProgress; // De 0 a 1
            
            card1.style.transform = `translate3d(calc(-50% + ${x1}px), 0, 0) scale(${scale1})`;
            card1.style.opacity = opacity1;

            // Card 2 se mantiene oculta
            card2.style.transform = `translate3d(150vw, 0, 0)`;
            card2.style.opacity = 0;

        } 
        // --- FASE 2: Entrada de la Card 3 (Progress 0.5 - 1.0) ---
        // Card 0 y 1 están en posición, Card 3 entra desde la derecha.
        else {
            // Normalizamos progreso de esta fase
            const phaseProgress = easeOutCubic((progress - 0.5) * 2);

            // Card 0 se mantiene en su sitio final
            card0.style.transform = `translate3d(calc(-50% + ${finalPos0}px), 0, 0)`;

            // Card 1 se mantiene en el centro (su sitio final)
            card1.style.transform = `translate3d(-50%, 0, 0) scale(1)`;
            card1.style.opacity = 1;

             // Card 2 entra desde la derecha hasta su posición final derecha
            const startX2 = window.innerWidth * 0.8;
            // Interpola desde startX2 hasta finalPos2
            const x2 = startX2 - ((startX2 - finalPos2) * phaseProgress);
            const scale2 = 0.9 + (0.1 * phaseProgress);
            const opacity2 = phaseProgress;

            card2.style.transform = `translate3d(calc(-50% + ${x2}px), 0, 0) scale(${scale2})`;
            card2.style.opacity = opacity2;
        }
    }

    window.addEventListener('scroll', handleAppleScroll, { passive: true });
    // Ejecutar una vez al inicio para establecer posiciones
    handleAppleScroll();
});
</script>