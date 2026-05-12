@extends('layouts.app')
@section('content')

<section id="inicio"
class="min-h-screen flex items-center justify-center px-6 relative overflow-hidden">
    <div class="max-w-4xl mx-auto text-center">
        <!-- Título -->
        <!-- Hola -->
        <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight">
            Hola, soy
        </h1>

        <!-- Nombre -->
        <h2 class="mt-2 text-5xl md:text-7xl font-extrabold
           bg-gradient-to-r from-white via-blue-400 to-blue-500
           bg-clip-text text-transparent leading-tight">
            Mijael Dueñas Salazar
        </h2>

        <!-- Subtitulo -->
        <p class="mt-6 text-2xl md:text-3xl font-semibold text-blue-500">
            Ingeniero de Software especializado en IA
        </p>

        <!-- Descripción -->
        <p class="mt-5 text-slate-400 text-lg leading-relaxed
                max-w-2xl mx-auto">
            Desarrollo aplicaciones modernas, escalables e inteligentes
            utilizando tecnologías eficientes y experiencias visuales elegantes.
        </p>

        <!-- Botones -->
        <div class="mt-12 flex flex-wrap justify-center gap-5">

            <a href="#proyectos"
            class="px-8 py-4 rounded-xl bg-blue-500
                    hover:bg-blue-600 transition duration-300
                    font-semibold shadow-lg hover:scale-105">
                Ver proyectos
            </a>

            <a href="/cv.pdf"
            class="px-8 py-4 rounded-xl border border-slate-700
                    bg-white/5 backdrop-blur-md
                    hover:border-blue-500 hover:text-blue-500
                    transition duration-300 font-semibold">
                Descargar CV
            </a>

        </div>
    </div>

</section>

<!-- SOBRE MI -->
<section id="sobre" class="py-28 bg-slate-900">
    <div class="max-w-7xl mx-auto px-8">
        <div class="grid lg:grid-cols-[1.3fr_0.7fr] gap-10 items-start">
            <!-- Columna izquierda -->
            <div>
                <!-- Encabezado -->
                <div class="mb-6">
                    <p class="text-blue-500 uppercase tracking-[0.25em] text-sm mb-4">
                        Sobre mí
                    </p>
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight max-w-3xl">
                        Desarrollo experiencias web modernas y funcionales.
                    </h2>
                </div>

                <!-- Texto -->
                <p class="text-slate-300 text-lg leading-8 max-w-3xl mb-9">
                    Soy Mijael Alexis Dueñas Salazar, actualmente estudiante de Ingeniería de Software con IA. 
                    Este portafolio recopila todos los proyectos en los que trabajé durante mis prácticas en la 
                    agencia Consigue Ventas y hablo brevemente de cada una de ellas. A lo largo de mi experiencia,
                    he desarrollado habilidades en WordPress, Elementor, CSS, JavaScript, PHP y diseño UX/UI, creando 
                    soluciones web que combinan funcionalidad con estética moderna. ¡Muchas gracias por leer!
                </p>

                <!-- Tarjetas -->
                <div class="grid md:grid-cols-3 gap-5">
                    <div class="rounded-2xl border border-slate-800 bg-slate-950 p-6">
                        <p class="text-sm text-blue-400 mb-3">Enfoque</p>
                        <p class="text-slate-300 leading-7">
                           Me enfoco en crear interfaces modernas, limpias y funcionales, 
                           cuidando tanto el diseño visual como la experiencia del usuario.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-800 bg-slate-950 p-6">
                        <p class="text-sm text-blue-400 mb-3">Experiencia</p>
                        <p class="text-slate-300 leading-7">
                            He trabajado en páginas corporativas, catálogos web y proyectos enfocados 
                            en conversión e integración con herramientas digitales.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-800 bg-slate-950 p-6">
                        <p class="text-sm text-blue-400 mb-3">Interes</p>
                        <p class="text-slate-300 leading-7">
                            Me interesa seguir creciendo en desarrollo frontend, diseño UI y 
                            creación de productos digitales con impacto real.
                        </p>
                    </div>
                </div>
            </div>  

            <!-- Columna derecha -->
            <div class="lg:sticky mt-10">
                <div class="rounded-3xl border border-slate-800 bg-gradient-to-b from-slate-900 to-slate-950 p-5 shadow-2xl shadow-blue-950/20">
                    <div class="aspect-[5/5] rounded-2xl bg-slate-800 overflow-hidden flex items-center justify-center text-slate-500">
                        
                    </div>

                    <div class="mt-5 space-y-3">
                        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Ubicación</span>
                            <span class="text-slate-200 text-sm">Lima / Perú</span>
                        </div>

                        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Perfil</span>
                            <span class="text-slate-200 text-sm">Ingeniero de Software</span>
                        </div>

                        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Disponibilidad</span>
                            <span class="text-slate-200 text-sm">Inmediata</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 text-sm">Idiomas</span>
                            <span class="text-slate-200 text-sm">Español/Ingles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------------- SKILL -------------------------------->
<section id="skills" class="py-28 bg-slate-950">
    <div class="max-w-7xl mx-auto px-8">
        
        <!-- Encabezado -->
        <div class="mb-14">
            <p class="text-blue-500 uppercase tracking-[0.25em] text-sm mb-4">
                Skills
            </p>
            <h2 class="text-4xl md:text-5xl font-bold max-w-5xl leading-tight mb-6">
                Tecnologías y habilidades con las que construyo mis proyectos
            </h2>
        </div>

        <!-- Cards principales -->
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mb-14">
            @foreach($skills as $categoria => $items)
            <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                
                <div class="mb-5">
                    <h3 class="text-xl font-semibold text-white mb-2">{{ $categoria }}</h3>
                </div>
                <div class="space-y-4">
                    @foreach($items as $skill)
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span>{{ $skill['name'] }}</span>
                        </div>
                        <div class="w-full h-2 bg-slate-800 rounded-full overflow-hidden">
                            <div class="h-full bg-blue-500 rounded-full" style="width: {{ $skill['porcentaje'] }}%"></div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

            @endforeach
        </div>

        <!-- Tecnologías / badges -->
        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-8">
            <h3 class="text-2xl font-semibold mb-6">Tecnologías y herramientas</h3>
            <div class="grid grid-cols-3 md:grid-cols-7 gap-6 text-center">
                @foreach($skills as $categoria => $items)
                    @foreach($items as $skill)
                    <div class="flex flex-col hover:scale-125 items-center gap-2">
                        <i class="{{ $skill['icono'] }} text-6xl"></i>
                        <span class="text-sm text-slate-400">{{ $skill['name'] }}</span>
                    </div>
                    @endforeach   
                @endforeach           
            </div>
        </div>
    </div>
</section>

<!---------------------------- PROYECTOS ------------------------------------->
<section id="proyectos" class="py-28 bg-slate-900">
    <div class="max-w-7xl mx-auto px-8">

        <!-- Encabezado -->
        <div class="mb-14">
            <p class="text-blue-500 uppercase tracking-[0.25em] text-sm mb-4">
                Proyectos
            </p>
            <h2 class="text-4xl md:text-5xl font-bold max-w-5xl leading-tight mb-6">
                Proyectos que reflejan mi proceso, mi estilo y lo que puedo construir
            </h2>
        </div>

        <!-- CARDS -->
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <article class="relative group rounded-3xl border border-slate-800 bg-slate-950 overflow-hidden hover:border-blue-500/50 transition cursor-pointer">
                    <div class="h-52 overflow-hidden bg-slate-800">
                        <img
                            src="{{ asset($project['image']) }}"
                            alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                        >

                    </div>
                    <div class="p-6">
                        <p class="text-blue-400 text-sm mb-3">
                            {{ $project['type'] }}
                        </p>
                        <h3 class="text-3xl md:text-2xl lg:text-3xl font-bold mb-3 group-hover:text-blue-400 transition">
                            {{ $project['title'] }}
                        </h3>
                        
                        <p class="text-slate-300 leading-7 text-sm mb-4">
                            {{ $project['description'] }}
                        </p>
                        @if($project['demo'])
                        <a 
                            href="{{ $project['demo'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 text-xl text-blue-500 font-semibold leading-7 hover:text-blue-600 transition"
                        >
                        Ver proyecto
                        <svg 
                            class="w-5 h-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 14 10"
                        >
                            <path 
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9"
                            />
                        </svg>
                        @else
                            <button
                                disabled
                                class="inline-flex items-center gap-2 text-xl text-slate-500 font-semibold cursor-not-allowed opacity-60"
                            >
                                No disponible 
                            </button> 
                        @endif
                        </a>
                    </div>
                       
                </article>
            @endforeach
        </div>
    </div>
</section>

 <!------------------------------------------------------------------------------->
 <!----------------------------   CONTACTO   ------------------------------------->
 <!------------------------------------------------------------------------------->
<section id="contacto" class="py-28 bg-slate-950">
    <div class="max-w-7xl mx-auto px-8">
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <!-- Columna izquierda -->
            <div>
                <p class="text-blue-500 uppercase tracking-[0.25em] text-sm mb-4">
                    Contacto
                </p>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                    ¿Tienes una idea o quieres trabajar conmigo?
                </h2>
                <p class="text-slate-300 text-lg leading-8 max-w-xl mb-5">
                    Rellena el formulario y me pondré en contacto contigo lo antes posible.
                    También puedes encontrarme en otras plataformas.
                </p>
                <h3 class="text-2xl font-semibold mb-6">
                    Otras formas de conectar
                </h3>
                <div class="space-y-5">
                    <a href="https://wa.me/51987654321?text=Hola%20Mijael,%20vi%20tu%20portafolio" target="_blank" rel="noopener noreferrer"

                       class="group flex items-center gap-5 rounded-2xl border border-slate-800 bg-slate-900 p-5 hover:border-blue-500/50 transition">
                        <div class="w-14 h-14 rounded-full border border-slate-700 bg-slate-800 flex items-center justify-center text-white-400 text-2xl group-hover:text-blue-400">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <p class="text-xl font-semibold group-hover:text-blue-400 transition">
                                WhatsApp
                            </p>
                            <p class="text-slate-400">
                                902170050
                            </p>
                        </div>
                    </a>
                    <a  href="https://github.com/MijaelDS" target="_blank" rel="noopener noreferrer"
                       class="group flex items-center gap-5 rounded-2xl border border-slate-800 bg-slate-900 p-5 hover:border-blue-500/50 transition">
                        <div class="w-14 h-14 rounded-full border border-slate-700 bg-slate-800 flex items-center justify-center text-white text-2xl group-hover:text-blue-400">
                            <i class="devicon-github-original"></i>
                        </div>
                        <div>
                            <p class="text-xl font-semibold group-hover:text-blue-400 transition">
                                GitHub
                            </p>
                            <p class="text-slate-400">
                                Revisa mi código y proyectos
                            </p>
                        </div>
                    </a>

                    <div class="group flex items-center gap-5 rounded-2xl border border-slate-800 bg-slate-900 p-5 hover:border-blue-500/50 transition">
                        <div class="w-14 h-14 rounded-full border border-slate-700 bg-slate-800 flex items-center justify-center text-white text-xl group-hover:text-blue-400 transition">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xl font-semibold group-hover:text-blue-400 transition">
                                Email
                            </p>
                            <p class="text-slate-400">
                                mijaelalexisds@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna derecha -->
            <div class="rounded-3xl border border-slate-800 bg-slate-900 p-8 md:p-10">
                <h3 class="text-3xl font-semibold mb-8">
                    Envíame un mensaje
                </h3>
                <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label class="block text-sm text-slate-400 mb-2">Nombre</label>
                            <input
                                type="text"
                                placeholder="Tu nombre"
                                class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"
                            >
                        </div>

                        <div>
                            <label class="block text-sm text-slate-400 mb-2">Email</label>
                            <input
                                type="email"
                                placeholder="tu@email.com"
                                class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"
                            >
                        </div>
                    <div>
                        <label class="block text-sm text-slate-400 mb-2">Mensaje</label>
                        <textarea
                            rows="7"
                            placeholder="Cuéntame sobre tu proyecto..."
                            class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition resize-none"
                        ></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-8 py-3 rounded-xl bg-blue-500 text-white hover:bg-blue-600 transition">
                            Enviar mensaje
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection