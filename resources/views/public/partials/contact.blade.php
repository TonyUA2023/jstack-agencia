@php
    $isEs = app()->getLocale() === 'es';
@endphp

<section id="contact" class="relative py-24 overflow-hidden bg-slate-950">
    
    {{-- =========================
         FONDO AMBIENTAL (GLOWS)
         ========================= --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Luz superior derecha --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-600/10 rounded-full blur-[120px] translate-x-1/3 -translate-y-1/4"></div>
        {{-- Luz inferior izquierda --}}
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/4"></div>
        {{-- Grid sutil --}}
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">

            {{-- =========================
                 COLUMNA IZQUIERDA: INFO
                 ========================= --}}
            <div class="space-y-10 pt-10">
                
                {{-- Header --}}
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-sky-500/30 bg-sky-500/10 text-sky-400 text-xs font-bold tracking-widest uppercase">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                        </span>
                        {{ $isEs ? 'Disponible para nuevos proyectos' : 'Available for new projects' }}
                    </div>

                    <h2 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                        {{ $isEs ? 'Hablemos de tu' : 'Let\'s talk about' }}
                        <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-indigo-400">
                            {{ $isEs ? 'siguiente gran idea.' : 'your next big idea.' }}
                        </span>
                    </h2>

                    <p class="text-lg text-slate-400 max-w-md leading-relaxed">
                        {{ $isEs 
                            ? '¿Tienes un proyecto en mente? Ayudamos a empresas a escalar con tecnología a medida y diseño estratégico.' 
                            : 'Have a project in mind? We help companies scale with custom technology and strategic design.' }}
                    </p>
                </div>

                {{-- Datos de Contacto Rápidos --}}
                <div class="space-y-6 border-t border-white/10 pt-10">
                    
                    {{-- Email --}}
                    <a href="mailto:hola@jstack.agency" class="group flex items-center gap-4 transition-all hover:translate-x-2">
                        <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-sky-500/20 group-hover:border-sky-500/50 transition-colors">
                            <svg class="w-5 h-5 text-slate-300 group-hover:text-sky-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Email</p>
                            <p class="text-white text-lg font-medium">hola@jstack.agency</p>
                        </div>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/51999999999" target="_blank" class="group flex items-center gap-4 transition-all hover:translate-x-2">
                        <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-emerald-500/20 group-hover:border-emerald-500/50 transition-colors">
                            <svg class="w-5 h-5 text-slate-300 group-hover:text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">WhatsApp</p>
                            <p class="text-white text-lg font-medium">+51 999 999 999</p>
                        </div>
                    </a>
                </div>
            </div>

            {{-- =========================
                 COLUMNA DERECHA: FORM
                 ========================= --}}
            <div class="relative bg-slate-900/50 backdrop-blur-xl border border-white/10 p-8 md:p-10 rounded-3xl shadow-2xl">
                
                {{-- Decoración Borde Brillante --}}
                <div class="absolute inset-0 rounded-3xl border border-white/5 pointer-events-none"></div>
                
                <form action="#" method="POST" class="space-y-6 relative z-10">
                    @csrf

                    {{-- Grid Nombre / Email --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Nombre --}}
                        <div class="group relative">
                            <label for="name" class="block text-xs font-medium text-slate-400 uppercase tracking-wider mb-2 group-focus-within:text-sky-400 transition-colors">
                                {{ $isEs ? 'Nombre' : 'Name' }}
                            </label>
                            <input type="text" id="name" name="name" required 
                                   class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 text-white outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition-all duration-300 placeholder-slate-700"
                                   placeholder="John Doe">
                        </div>

                        {{-- Email --}}
                        <div class="group relative">
                            <label for="email" class="block text-xs font-medium text-slate-400 uppercase tracking-wider mb-2 group-focus-within:text-sky-400 transition-colors">
                                {{ $isEs ? 'Correo Electrónico' : 'Email Address' }}
                            </label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 text-white outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition-all duration-300 placeholder-slate-700"
                                   placeholder="john@company.com">
                        </div>
                    </div>

                    {{-- Selección de Servicio (Radio Buttons con estilo de Tags) --}}
                    <div class="space-y-3">
                        <label class="block text-xs font-medium text-slate-400 uppercase tracking-wider">
                            {{ $isEs ? 'Me interesa...' : 'I\'m interested in...' }}
                        </label>
                        <div class="flex flex-wrap gap-3">
                            @foreach(['Web Design', 'Custom System', 'Mobile App', 'NFC Tech'] as $service)
                                <label class="cursor-pointer">
                                    <input type="radio" name="service" value="{{ $service }}" class="peer sr-only">
                                    <div class="px-4 py-2 rounded-lg border border-white/10 bg-slate-950/30 text-slate-400 text-sm transition-all 
                                                peer-checked:bg-sky-600 peer-checked:text-white peer-checked:border-sky-500 peer-checked:shadow-[0_0_15px_rgba(14,165,233,0.4)]
                                                hover:border-white/30 hover:text-white">
                                        {{ $service }}
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Mensaje --}}
                    <div class="group relative">
                        <label for="message" class="block text-xs font-medium text-slate-400 uppercase tracking-wider mb-2 group-focus-within:text-sky-400 transition-colors">
                            {{ $isEs ? 'Cuéntanos sobre tu proyecto' : 'Tell us about your project' }}
                        </label>
                        <textarea id="message" name="message" rows="4" required
                                  class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 text-white outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition-all duration-300 placeholder-slate-700 resize-none"
                                  placeholder="{{ $isEs ? 'Hola, necesito un sistema para...' : 'Hi, I need a system for...' }}"></textarea>
                    </div>

                    {{-- Botón Submit --}}
                    <button type="submit" class="w-full group relative flex items-center justify-center gap-3 bg-gradient-to-r from-sky-600 to-indigo-600 text-white font-bold py-4 rounded-xl shadow-lg shadow-sky-900/20 overflow-hidden transition-all hover:scale-[1.02] hover:shadow-sky-600/40">
                        
                        {{-- Brillo al pasar mouse --}}
                        <div class="absolute inset-0 bg-white/20 translate-x-[-100%] skew-x-12 group-hover:translate-x-[100%] transition-transform duration-700 ease-in-out"></div>
                        
                        <span>{{ $isEs ? 'Enviar Mensaje' : 'Send Message' }}</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>