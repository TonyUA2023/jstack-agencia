@php
    $isEs = app()->getLocale() === 'es';

    $cards = [
        [
            'id' => 'card-web',
            'subtitle_es' => 'Fundamentos',
            'subtitle_en' => 'Foundations',
            'title_es' => 'Diseño & Estrategia Web',
            'title_en' => 'Web Design & Strategy',
            'desc_es' => 'Sitios corporativos y landings de alto impacto. Tu presencia digital 24/7.',
            'desc_en' => 'High-impact corporate sites and landings. Your 24/7 digital presence.',
            'has_price' => false,
            'cta_es' => 'Consultar',
            'cta_en' => 'Inquire',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S12 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S7.5 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />'
        ],
        [
            'id' => 'card-saas',
            'subtitle_es' => 'Sistemas',
            'subtitle_en' => 'Systems',
            'title_es' => 'Plataformas SaaS',
            'title_en' => 'Custom SaaS',
            'desc_es' => 'Automatiza procesos complejos. Dashboards, CRMs y ERPs a medida.',
            'desc_en' => 'Automate complex processes. Custom Dashboards, CRMs, and ERPs.',
            'has_price' => false,
            'cta_es' => 'Cotizar',
            'cta_en' => 'Quote',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />'
        ],
        [
            'id' => 'card-app',
            'subtitle_es' => 'Movilidad',
            'subtitle_en' => 'Mobility',
            'title_es' => 'Apps Móviles',
            'title_en' => 'Mobile Apps',
            'desc_es' => 'iOS y Android nativo. Llevamos tu negocio al bolsillo de tus clientes.',
            'desc_en' => 'Native iOS and Android. We bring your business to your customers\' pockets.',
            'has_price' => false,
            'cta_es' => 'Ver Demos',
            'cta_en' => 'View Demos',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />'
        ],
        [
            'id' => 'card-nfc',
            'highlight' => true,
            'subtitle_es' => 'Híbrido',
            'subtitle_en' => 'Hybrid',
            'title_es' => 'NFC + Identidad',
            'title_en' => 'NFC + Identity',
            'desc_es' => 'Tarjetas inteligentes de metal. Conecta el mundo físico con tu ecosistema digital.',
            'desc_en' => 'Smart metal cards. Connect the physical world with your digital ecosystem.',
            'has_price' => true,
            'price' => '$299',
            'price_detail_es' => 'Pago único',
            'price_detail_en' => 'One-time pay',
            'cta_es' => 'Comprar',
            'cta_en' => 'Buy Now',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />'
        ]
    ];
@endphp

@push('head')
<style>
    /* Altura suficiente para que el scroll se sienta natural */
    .apple-scroll-track { height: 500vh; }

    .apple-card {
        background: rgba(28, 28, 30, 0.6);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 28px;
        padding: 32px;
        display: flex; flex-direction: column;
        box-shadow: 0 20px 40px -15px rgba(0,0,0,0.5);
        /* Importante: transiciones rápidas y lineales para responder al JS sin lag */
        transition: transform 0.1s linear, opacity 0.1s linear;
        will-change: transform, opacity;
    }

    .apple-card.highlight {
        background: rgba(44, 44, 46, 0.9);
        border-color: rgba(255, 255, 255, 0.25);
        box-shadow: 0 30px 60px -20px rgba(14, 165, 233, 0.25);
    }

    .apple-btn {
        display: inline-flex; items-center; justify-center;
        padding: 12px 20px; border-radius: 100px;
        font-weight: 600; font-size: 14px; transition: all 0.3s ease;
    }
    .apple-btn-primary { background: #fff; color: #000; }
    .apple-btn-primary:hover { background: #e5e5e5; transform: scale(1.02); }
    .apple-btn-secondary { background: rgba(255,255,255,0.1); color: #fff; }
    .apple-btn-secondary:hover { background: rgba(255,255,255,0.15); }

    @media (min-width: 1024px) {
        /* Posiciones iniciales antes de que JS tome el control */
        .card-0 { transform: translateX(0); opacity: 1; z-index: 10; }
        /* Las demás fuera de pantalla a la derecha */
        .card-1, .card-2, .card-3 { transform: translateX(200%); opacity: 0; }
        .card-1 { z-index: 20; }
        .card-2 { z-index: 30; }
        .card-3 { z-index: 40; }
    }
</style>
@endpush

{{-- VISTA MÓVIL (Lista vertical simple) --}}
<div class="lg:hidden bg-black py-20 px-6 space-y-6">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-white mb-3">Jstack Services</h2>
    </div>
    @foreach($cards as $card)
        <div class="apple-card {{ isset($card['highlight']) ? 'highlight' : '' }}">
            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white mb-5">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">{!! $card['icon'] !!}</svg>
            </div>
            <span class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-1">{{ $isEs ? $card['subtitle_es'] : $card['subtitle_en'] }}</span>
            <h3 class="text-xl font-bold text-white mb-3">{{ $isEs ? $card['title_es'] : $card['title_en'] }}</h3>
            <p class="text-slate-400 mb-6 text-sm leading-relaxed">{{ $isEs ? $card['desc_es'] : $card['desc_en'] }}</p>
            <div class="mt-auto">
                @if($card['has_price'])
                    <div class="mb-6 flex items-baseline gap-2">
                        <span class="text-4xl font-black text-white">{{ $card['price'] }}</span>
                    </div>
                    <a href="#contact" class="apple-btn apple-btn-primary w-full">{{ $isEs ? $card['cta_es'] : $card['cta_en'] }}</a>
                @else
                    <a href="#contact" class="apple-btn apple-btn-secondary w-full">{{ $isEs ? $card['cta_es'] : $card['cta_en'] }}</a>
                @endif
            </div>
        </div>
    @endforeach
</div>

{{-- VISTA ESCRITORIO (Sticky Animation) --}}
<section class="hidden lg:block relative bg-black apple-scroll-track font-sans">
    <div class="sticky top-0 h-screen overflow-hidden flex flex-col items-center">
        
        {{-- 1. TITULO FIJO (Sticky Header) --}}
        {{-- Usamos pt-20 para dar aire arriba, y z-index 50 para que esté sobre las tarjetas --}}
        <div class="cards-header text-center pt-20 transition-all duration-500 relative z-50 w-full bg-gradient-to-b from-black via-black/80 to-transparent pb-10">
            <h2 class="text-5xl font-bold text-white mb-3 tracking-tight">{{ $isEs ? 'Ecosistema Integral' : 'Complete Ecosystem' }}</h2>
            <p class="text-lg text-slate-400 max-w-xl mx-auto">{{ $isEs ? 'Soluciones conectadas para cada etapa de crecimiento.' : 'Connected solutions for every growth stage.' }}</p>
        </div>

        {{-- 2. CONTENEDOR DE TARJETAS --}}
        {{-- Margin-top ajustado para que las tarjetas no tapen el título --}}
        <div class="cards-container relative w-full max-w-[1600px] px-4 flex-1 flex items-center justify-center -mt-20">
            @foreach($cards as $index => $card)
                {{-- Ancho de tarjeta 320px --}}
                <div class="apple-card card-{{ $index }} absolute top-[25%] w-[320px] h-[500px] {{ isset($card['highlight']) ? 'highlight' : '' }}">
                    
                    <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-white mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $card['icon'] !!}</svg>
                    </div>

                    <div class="flex-1">
                        <span class="text-xs font-bold text-sky-500 uppercase tracking-widest mb-2 block">
                            {{ $isEs ? $card['subtitle_es'] : $card['subtitle_en'] }}
                        </span>
                        <h3 class="text-2xl font-bold text-white mb-4 leading-tight">
                            {{ $isEs ? $card['title_es'] : $card['title_en'] }}
                        </h3>
                        <p class="text-base text-slate-400 leading-relaxed">
                            {{ $isEs ? $card['desc_es'] : $card['desc_en'] }}
                        </p>
                    </div>
                    
                    <div class="mt-8 border-t border-white/10 pt-8">
                        @if($card['has_price'])
                            <div class="mb-6">
                                <span class="text-5xl font-black text-white tracking-tight">{{ $card['price'] }}</span>
                            </div>
                            <a href="#contact" class="apple-btn apple-btn-primary w-full">
                                {{ $isEs ? $card['cta_es'] : $card['cta_en'] }}
                            </a>
                        @else
                            <a href="#contact" class="apple-btn apple-btn-secondary w-full">
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
    if (window.innerWidth < 1024) return;

    const track = document.querySelector('.apple-scroll-track');
    const cards = [
        document.querySelector('.card-0'),
        document.querySelector('.card-1'),
        document.querySelector('.card-2'),
        document.querySelector('.card-3')
    ];

    const easeOutCubic = x => 1 - Math.pow(1 - x, 3);

    // --- CONFIGURACIÓN MATEMÁTICA DE SIMETRÍA ---
    const cardWidth = 320;
    const gap = 30;
    // Unidad de desplazamiento (Ancho + Gap) = 350px
    const unit = cardWidth + gap;

    // Definimos los puntos centrales para cada estado (cuando hay 1, 2, 3 o 4 tarjetas visibles)
    // State 1 (Solo Card 0): Centro [0]
    // State 2 (Cards 0,1): [-175, 175] -> Card 0 se mueve a -0.5 unidades
    // State 3 (Cards 0,1,2): [-350, 0, 350] -> Card 0 se mueve a -1.0 unidad
    // State 4 (Cards 0,1,2,3): [-525, -175, 175, 525] -> Card 0 se mueve a -1.5 unidades

    // Posiciones finales deseadas (State 4 - Simetría Perfecta)
    const finalPositions = [
        -(unit * 1.5), // Card 0
        -(unit * 0.5), // Card 1
        (unit * 0.5),  // Card 2
        (unit * 1.5)   // Card 3
    ];

    // Posiciones iniciales de entrada (Desde la derecha)
    const startX = window.innerWidth * 0.6; 

    function handleAppleScroll() {
        const rect = track.getBoundingClientRect();
        const viewportHeight = window.innerHeight;
        const rawProgress = (-rect.top) / (rect.height - viewportHeight);
        let p = Math.max(0, Math.min(1, rawProgress)); // Progreso Global 0 a 1

        // Dividimos el scroll en 3 fases
        const phase1 = Math.min(1, Math.max(0, p / 0.33)); // 0 -> Entra Card 1
        const phase2 = Math.min(1, Math.max(0, (p - 0.33) / 0.33)); // Entra Card 2
        const phase3 = Math.min(1, Math.max(0, (p - 0.66) / 0.34)); // Entra Card 3

        // Easing
        const ep1 = easeOutCubic(phase1);
        const ep2 = easeOutCubic(phase2);
        const ep3 = easeOutCubic(phase3);

        // --- LÓGICA DE MOVIMIENTO DINÁMICO ---

        // 1. CARD 0
        // Empieza en 0.
        // Fase 1: Se mueve de 0 a -175 (para hacer espacio a la pareja)
        // Fase 2: Se mueve de -175 a -350 (para hacer espacio al trío)
        // Fase 3: Se mueve de -350 a -525 (para el cuarteto final)
        let c0_pos = 0;
        if (p < 0.33)      c0_pos = 0 + (-(unit * 0.5) - 0) * ep1;
        else if (p < 0.66) c0_pos = -(unit * 0.5) + (-(unit * 1.0) - (-(unit * 0.5))) * ep2;
        else               c0_pos = -(unit * 1.0) + (-(unit * 1.5) - (-(unit * 1.0))) * ep3;
        
        cards[0].style.transform = `translate3d(calc(-50% + ${c0_pos}px), 0, 0)`;


        // 2. CARD 1
        // Fase 1: Entra desde startX hasta 175 (pareja con Card 0)
        // Fase 2: Se mueve de 175 a 0 (centro del trío)
        // Fase 3: Se mueve de 0 a -175 (posición final cuarteto)
        let c1_pos = startX;
        let c1_scale = 0.9;
        let c1_op = 0;

        if (p > 0) {
            c1_op = 1;
            c1_scale = 1;
            if (p < 0.33) {
                c1_pos = startX + ((unit * 0.5) - startX) * ep1;
                c1_op = ep1; // Fade in
                c1_scale = 0.9 + (0.1 * ep1);
            } else if (p < 0.66) {
                c1_pos = (unit * 0.5) + (0 - (unit * 0.5)) * ep2;
            } else {
                c1_pos = 0 + (-(unit * 0.5) - 0) * ep3;
            }
        }
        cards[1].style.transform = `translate3d(calc(-50% + ${c1_pos}px), 0, 0) scale(${c1_scale})`;
        cards[1].style.opacity = c1_op;


        // 3. CARD 2
        // Fase 2: Entra desde startX hasta 350 (derecha del trío)
        // Fase 3: Se mueve de 350 a 175 (posición final cuarteto)
        let c2_pos = startX;
        let c2_scale = 0.9;
        let c2_op = 0;

        if (p > 0.33) {
            c2_op = 1;
            c2_scale = 1;
            if (p < 0.66) {
                c2_pos = startX + ((unit * 1.0) - startX) * ep2;
                c2_op = ep2;
                c2_scale = 0.9 + (0.1 * ep2);
            } else {
                c2_pos = (unit * 1.0) + ((unit * 0.5) - (unit * 1.0)) * ep3;
            }
        }
        cards[2].style.transform = `translate3d(calc(-50% + ${c2_pos}px), 0, 0) scale(${c2_scale})`;
        cards[2].style.opacity = c2_op;


        // 4. CARD 3
        // Fase 3: Entra desde startX hasta 525 (posición final)
        let c3_pos = startX;
        let c3_scale = 0.9;
        let c3_op = 0;

        if (p > 0.66) {
            c3_pos = startX + ((unit * 1.5) - startX) * ep3;
            c3_op = ep3;
            c3_scale = 0.9 + (0.1 * ep3);
        }
        cards[3].style.transform = `translate3d(calc(-50% + ${c3_pos}px), 0, 0) scale(${c3_scale})`;
        cards[3].style.opacity = c3_op;
    }

    window.addEventListener('scroll', handleAppleScroll, { passive: true });
    handleAppleScroll();
});
</script>