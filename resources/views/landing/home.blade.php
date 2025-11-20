<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- ====== SEO BÁSICO ====== --}}
    <title>Agencia de Desarrollo Web y Sistemas a Medida | Jstack</title>
    <meta name="description"
          content="Jstack es una agencia de desarrollo web especializada en plataformas, sistemas a medida y páginas web minimalistas para potenciar tu negocio.">
    <meta name="keywords"
          content="desarrollo web, sistemas a medida, plataformas web, páginas web, diseño minimalista, Jstack, agencia de desarrollo web">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Jstack">

    {{-- IMPORTANTE: cambia la URL al dominio real cuando lo tengas --}}
    <link rel="canonical" href="{{ url('/') }}">

    {{-- ====== OPEN GRAPH (para compartir en redes) ====== --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="Jstack | Desarrollo de Plataformas Web y Sistemas a Medida">
    <meta property="og:description"
          content="Desarrollamos plataformas web, sistemas adaptados a tu negocio y páginas web modernas con enfoque en resultados.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Jstack Agencia">
    {{-- Si luego tienes una imagen, cámbiala por la tuya --}}
    <meta property="og:image" content="{{ url('/images/jstack-cover.jpg') }}">

    {{-- ====== TWITTER CARD ====== --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jstack | Desarrollo Web y Sistemas a Medida">
    <meta name="twitter:description"
          content="Plataformas web, sistemas personalizados y sitios minimalistas para negocios que quieren crecer.">
    <meta name="twitter:image" content="{{ url('/images/jstack-cover.jpg') }}">

    {{-- ====== RESPONSIVE ====== --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- ====== FUENTE + TAILWIND CDN (rápido para comenzar) ====== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#F3F4FF',
                            100: '#E0E7FF',
                            500: '#4F46E5',
                            600: '#4338CA',
                            900: '#020617',
                        },
                        accent: '#22C55E',
                    },
                },
            },
        };
    </script>

    {{-- ====== SCHEMA.ORG: AGENCIA DE SERVICIOS ====== --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type'    => 'ProfessionalService',
            'name'     => 'Jstack Agencia de Desarrollo Web',
            'url'      => url('/'),
            'description' => 'Agencia de desarrollo web especializada en plataformas, sistemas a medida y páginas web minimalistas.',
            'areaServed'  => [
                '@type' => 'Place',
                'name'  => 'Perú'
            ],
            'founder'  => 'Jstack',
            'sameAs'   => [
                // agrega redes cuando las tengas
                // 'https://www.facebook.com/...',
                // 'https://www.instagram.com/...'
            ],
            'serviceType' => [
                'Desarrollo de plataformas web',
                'Sistemas a medida',
                'Páginas web corporativas',
                'Integraciones con APIs'
            ]
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-50">

    {{-- ========= HEADER FIJO ========= --}}
    <header class="sticky top-0 z-30 bg-slate-950/80 backdrop-blur border-b border-white/5">
        <nav class="max-w-6xl mx-auto flex items-center justify-between px-4 py-3">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="h-8 w-8 rounded-xl bg-gradient-to-br from-brand-500 via-brand-600 to-brand-900 flex items-center justify-center text-xs font-semibold">
                    JS
                </span>
                <span class="text-sm font-semibold tracking-tight">Jstack Agencia</span>
            </a>

            <div class="hidden md:flex items-center gap-6 text-xs">
                <a href="#servicios" class="hover:text-brand-100 transition">Servicios</a>
                <a href="#proyectos" class="hover:text-brand-100 transition">Proyectos</a>
                <a href="#experiencia" class="hover:text-brand-100 transition">Experiencia</a>
                <a href="#contacto" class="hover:text-brand-100 transition">Contacto</a>
                <a href="#contacto"
                   class="inline-flex items-center gap-1 rounded-full bg-brand-500 hover:bg-brand-600 px-4 py-1.5 font-medium text-xs">
                    Agenda tu proyecto
                    <span>→</span>
                </a>
            </div>
        </nav>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-16 space-y-24">

        {{-- ========= HERO ========= --}}
        <section class="grid lg:grid-cols-[1.3fr,1fr] gap-10 items-center">
            <div class="space-y-6">
                <p class="inline-flex items-center gap-2 text-xs font-medium text-accent bg-white/5 rounded-full px-3 py-1 border border-white/10">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                    Desarrollo de plataformas y sistemas a medida
                </p>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold tracking-tight leading-tight">
                    Construyo plataformas web
                    <span class="text-brand-100">claras, rápidas</span>
                    y enfocadas en tu negocio.
                </h1>

                <p class="text-sm sm:text-base text-slate-300 max-w-xl">
                    Jstack es una agencia de desarrollo web especializada en
                    <strong>plataformas web, sistemas a medida</strong> y
                    <strong>páginas minimalistas</strong> que comunican mejor lo que hace tu negocio
                    y te ayudan a vender más.
                </p>

                <div class="flex flex-wrap items-center gap-3">
                    <a href="#contacto"
                       class="inline-flex items-center justify-center rounded-full bg-brand-500 hover:bg-brand-600 px-5 py-2 text-xs sm:text-sm font-medium">
                        Agenda una llamada
                    </a>
                    <a href="#proyectos"
                       class="inline-flex items-center justify-center rounded-full border border-white/10 hover:border-white/40 px-5 py-2 text-xs sm:text-sm">
                        Ver proyectos y experiencia
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-4 pt-4 text-xs text-slate-300">
                    <div>
                        <p class="text-lg font-semibold text-white">+X</p>
                        <p class="text-[11px] uppercase tracking-wide text-slate-400">Proyectos web entregados</p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-white">+Y</p>
                        <p class="text-[11px] uppercase tracking-wide text-slate-400">Sistemas adaptados al negocio</p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-white">+Z</p>
                        <p class="text-[11px] uppercase tracking-wide text-slate-400">Clientes que vuelven</p>
                    </div>
                </div>
            </div>

            {{-- Tarjeta lateral tipo “preview” de proyecto --}}
            <aside class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-brand-500/20 via-brand-500/0 to-accent/20 blur-2xl pointer-events-none"></div>

                <div class="relative rounded-2xl border border-white/10 bg-slate-900/70 p-5 shadow-[0_18px_80px_rgba(15,23,42,0.65)] space-y-4">
                    <p class="text-xs font-medium text-slate-300 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        Ejemplo de sistema a medida
                    </p>

                    <div class="rounded-xl bg-slate-950/70 border border-white/5 p-4 space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs text-slate-400">Panel de administración</p>
                                <p class="text-sm font-semibold">Dashboard de negocio</p>
                            </div>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-300 border border-emerald-500/30">
                                En producción
                            </span>
                        </div>

                        <div class="grid grid-cols-3 gap-2 text-[11px] text-slate-300">
                            <div class="rounded-lg bg-slate-900/70 p-2 border border-white/5">
                                <p class="font-semibold text-xs">Ventas</p>
                                <p class="text-emerald-400 font-semibold">+18%</p>
                            </div>
                            <div class="rounded-lg bg-slate-900/70 p-2 border border-white/5">
                                <p class="font-semibold text-xs">Tiempo</p>
                                <p class="text-slate-300">Proceso -40%</p>
                            </div>
                            <div class="rounded-lg bg-slate-900/70 p-2 border border-white/5">
                                <p class="font-semibold text-xs">Stack</p>
                                <p>Laravel · Tailwind</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-[11px] text-slate-400">
                        Diseño inspirado en interfaces limpias, sin ruido visual, para que tu equipo y tus clientes
                        entiendan rápido lo importante.
                    </p>
                </div>
            </aside>
        </section>

        {{-- ========= SERVICIOS ========= --}}
        <section id="servicios" class="space-y-6">
            <header class="space-y-2">
                <h2 class="text-xl sm:text-2xl font-semibold tracking-tight">Servicios de desarrollo web</h2>
                <p class="text-sm text-slate-300 max-w-2xl">
                    Cada negocio necesita una solución distinta. Por eso diseño y desarrollo
                    plataformas que se ajustan a tus procesos, no al revés.
                </p>
            </header>

            <div class="grid md:grid-cols-3 gap-5 text-sm">
                <article class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 space-y-3">
                    <h3 class="font-semibold text-base">Plataformas web</h3>
                    <p class="text-slate-300 text-xs">
                        Aplicaciones completas para gestionar procesos, clientes, ventas o inventario,
                        con panel administrador y vistas para tu equipo.
                    </p>
                    <ul class="text-[11px] text-slate-300 space-y-1">
                        <li>• Paneles administrativos</li>
                        <li>• Gestión de usuarios y roles</li>
                        <li>• Reportes y métricas</li>
                    </ul>
                </article>

                <article class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 space-y-3">
                    <h3 class="font-semibold text-base">Sistemas a medida</h3>
                    <p class="text-slate-300 text-xs">
                        Desarrollo de sistemas personalizados que se integran con tu forma real de trabajar:
                        nada de plantillas genéricas.
                    </p>
                    <ul class="text-[11px] text-slate-300 space-y-1">
                        <li>• Automatización de procesos</li>
                        <li>• Integración con APIs</li>
                        <li>• Módulos según tu negocio</li>
                    </ul>
                </article>

                <article class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 space-y-3">
                    <h3 class="font-semibold text-base">Páginas web minimalistas</h3>
                    <p class="text-slate-300 text-xs">
                        Sitios web rápidos, claros y modernos para explicar lo que haces y captar clientes
                        con un diseño limpio y profesional.
                    </p>
                    <ul class="text-[11px] text-slate-300 space-y-1">
                        <li>• Landing pages</li>
                        <li>• Web institucional</li>
                        <li>• Optimización SEO técnica</li>
                    </ul>
                </article>
            </div>
        </section>

        {{-- ========= PROYECTOS / EXPERIENCIA ========= --}}
        <section id="proyectos" class="space-y-6">
            <header class="space-y-2">
                <h2 class="text-xl sm:text-2xl font-semibold tracking-tight">Proyectos y experiencia</h2>
                <p class="text-sm text-slate-300 max-w-2xl">
                    Una selección de proyectos que reflejan cómo trabajo: entender primero el negocio,
                    luego diseñar y desarrollar una solución clara que aporte valor.
                </p>
            </header>

            {{-- Por ahora estático; luego puede salir desde BD --}}
            <div class="grid md:grid-cols-3 gap-5 text-sm">
                <article class="group rounded-2xl border border-white/10 bg-slate-900/70 p-5 space-y-3 hover:border-brand-500/70 hover:-translate-y-1 transition">
                    <p class="text-[11px] uppercase tracking-wide text-slate-400">Sistema interno</p>
                    <h3 class="font-semibold text-base">Gestión de inventario y ventas</h3>
                    <p class="text-xs text-slate-300">
                        Plataforma para controlar stock, sedes y movimientos, con reportes en tiempo real
                        y enfoque en rapidez para el usuario.
                    </p>
                    <p class="text-[11px] text-slate-400">
                        Stack: Laravel · MySQL · Tailwind
                    </p>
                </article>

                <article class="group rounded-2xl border border-white/10 bg-slate-900/70 p-5 space-y-3 hover:border-brand-500/70 hover:-translate-y-1 transition">
                    <p class="text-[11px] uppercase tracking-wide text-slate-400">Landing comercial</p>
                    <h3 class="font-semibold text-base">Marca de repuestos agrícolas</h3>
                    <p class="text-xs text-slate-300">
                        Página de presentación enfocada en claridad de servicios, catálogo y contacto rápido
                        por WhatsApp y redes.
                    </p>
                    <p class="text-[11px] text-slate-400">
                        Enfoque: diseño minimalista + SEO local.
                    </p>
                </article>

                <article class="group rounded-2xl border border-white/10 bg-slate-900/70 p-5 space-y-3 hover:border-brand-500/70 hover:-translate-y-1 transition">
                    <p class="text-[11px] uppercase tracking-wide text-slate-400">Plataforma académica</p>
                    <h3 class="font-semibold text-base">Gestión de procesos y reportes</h3>
                    <p class="text-xs text-slate-300">
                        Sistema para organizAR proyectos, tareas y reportes, integrando panel admin
                        y vistas específicas por rol.
                    </p>
                    <p class="text-[11px] text-slate-400">
                        Resultado: mejor visibilidad del avance y reducción de trabajo manual.
                    </p>
                </article>
            </div>
        </section>

        {{-- ========= EXPERIENCIA / SOBRE TI ========= --}}
        <section id="experiencia" class="space-y-6">
            <header class="space-y-2">
                <h2 class="text-xl sm:text-2xl font-semibold tracking-tight">Sobre Jstack</h2>
                <p class="text-sm text-slate-300 max-w-2xl">
                    Detrás de Jstack hay un desarrollador que combina lógica, diseño y experiencia real
                    construyendo sistemas y plataformas para distintos tipos de negocio.
                </p>
            </header>

            <div class="grid md:grid-cols-[1.3fr,1fr] gap-6 text-sm">
                <div class="space-y-3 text-slate-300">
                    <p>
                        Me enfoco en entender tus procesos, tus clientes y tus objetivos antes de escribir
                        una sola línea de código. El resultado: soluciones que se sienten propias
                        de tu negocio, no plantillas genéricas.
                    </p>
                    <p>
                        Trabajo principalmente con <strong>PHP, Laravel, MySQL y TailwindCSS</strong>,
                        creando aplicaciones escalables, mantenibles y con un diseño moderno.
                    </p>
                    <p>
                        Puedo ayudarte si quieres dejar de depender de hojas de Excel, formularios confusos
                        o páginas web que no comunican nada.
                    </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-slate-900/70 p-5 space-y-3 text-xs text-slate-300">
                    <p class="font-semibold text-sm text-white">Stack principal</p>
                    <ul class="space-y-1">
                        <li>• Laravel, PHP 8.x</li>
                        <li>• MySQL / MariaDB</li>
                        <li>• TailwindCSS, Alpine.js</li>
                        <li>• APIs REST / JSON</li>
                    </ul>
                    <p class="pt-2 font-semibold text-sm text-white">Cómo trabajo</p>
                    <ul class="space-y-1">
                        <li>• Reunión inicial para entender el negocio</li>
                        <li>• Propuesta con alcance claro</li>
                        <li>• Entregas parciales probables</li>
                        <li>• Acompañamiento después del lanzamiento</li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- ========= CONTACTO ========= --}}
        <section id="contacto" class="space-y-6">
            <header class="space-y-2">
                <h2 class="text-xl sm:text-2xl font-semibold tracking-tight">Conversemos de tu proyecto</h2>
                <p class="text-sm text-slate-300 max-w-2xl">
                    Cuéntame brevemente de qué trata tu negocio y qué te gustaría mejorar
                    con una plataforma o una página web clara.
                </p>
            </header>

            <div class="grid md:grid-cols-[1.1fr,1fr] gap-6">
                <form action="#" method="post"
                      class="rounded-2xl border border-white/10 bg-slate-900/70 p-5 space-y-4 text-sm">
                    {{-- Más adelante esto lo conectamos a un controlador y BD --}}
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs text-slate-300 mb-1">Nombre</label>
                            <input type="text" name="nombre"
                                   class="w-full rounded-lg bg-slate-950/70 border border-white/10 px-3 py-2 text-xs focus:outline-none focus:border-brand-500">
                        </div>
                        <div>
                            <label class="block text-xs text-slate-300 mb-1">Correo</label>
                            <input type="email" name="email"
                                   class="w-full rounded-lg bg-slate-950/70 border border-white/10 px-3 py-2 text-xs focus:outline-none focus:border-brand-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs text-slate-300 mb-1">Tipo de proyecto</label>
                        <select name="tipo"
                                class="w-full rounded-lg bg-slate-950/70 border border-white/10 px-3 py-2 text-xs focus:outline-none focus:border-brand-500">
                            <option value="">Selecciona una opción</option>
                            <option value="plataforma">Plataforma / Sistema web</option>
                            <option value="pagina">Página web / Landing</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs text-slate-300 mb-1">Cuéntame un poco más</label>
                        <textarea name="mensaje" rows="4"
                                  class="w-full rounded-lg bg-slate-950/70 border border-white/10 px-3 py-2 text-xs focus:outline-none focus:border-brand-500"
                                  placeholder="¿Qué problema quieres resolver?"></textarea>
                    </div>

                    <button type="submit"
                            class="inline-flex items-center justify-center rounded-full bg-brand-500 hover:bg-brand-600 px-5 py-2 text-xs font-medium">
                        Enviar mensaje
                    </button>
                </form>

                <div class="rounded-2xl border border-white/10 bg-slate-900/70 p-5 text-xs text-slate-300 space-y-3">
                    <p class="font-semibold text-sm text-white">También puedes escribirme directo</p>
                    <ul class="space-y-1">
                        <li>• WhatsApp: +51 XXX XXX XXX</li>
                        <li>• Correo: hola@jstack.dev (ejemplo)</li>
                    </ul>
                    <p class="pt-2 text-[11px] text-slate-400">
                        Respondo normalmente el mismo día hábil. Si tu proyecto encaja con lo que hago,
                        te propongo una llamada corta para entender mejor tu situación y darte opciones claras.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/5 py-6 text-[11px] text-slate-500 text-center">
        <p>© {{ date('Y') }} Jstack Agencia de Desarrollo Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
