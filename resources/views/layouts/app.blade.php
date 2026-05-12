<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Dueñas Salazar - </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <div id="cursor-light"></div>
    <body class="bg-slate-950 text-white scroll-smooth">

        <!-- NAVBAR -->
        <nav class="fixed top-0 w-full bg-slate-950/80 backdrop-blur z-50 border-b border-slate-800">
            <div class="max-w-7xl mx-auto px-8 flex justify-between items-center p-4">
                <a href="#inicio" class="text-xl font-bold text-blue-500">Mijael.dev</a>

                <div class="space-x-10 hidden md:flex">
                    <a href="#sobre" class="hover:text-blue-500 transition">Sobre mí</a>
                    <a href="#skills" class="hover:text-blue-500 transition">Skills</a>
                    <a href="#proyectos" class="hover:text-blue-500 transition">Proyectos</a>
                    <a href="#contacto" class="hover:text-blue-500 transition">Contacto</a>
                </div>
            </div>
        </nav>

        <main class="pt-20">
            @yield('content')
        </main>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed("#typing", {
            strings: [
                "Desarrollador Web",
                "Laravel Developer",
                "PHP & Java",
                "Construyendo proyectos modernos"
            ],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 1500,
            loop: true
        });
    </script>
    </body>
    <script>
    document.addEventListener("mousemove", (e) => {
        const light = document.getElementById("cursor-light");
        light.style.left = e.clientX + "px";
        light.style.top = e.clientY + "px";
    });
    </script>


<!--    MIS PROYECTOS     -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById("featuredImageWrapper");
    const bg = document.getElementById("featuredImageBg");

    if (wrapper && bg) {
        wrapper.addEventListener("mousemove", (e) => {
            const rect = wrapper.getBoundingClientRect();

            const x = (e.clientX - rect.left) / rect.width;
            const y = (e.clientY - rect.top) / rect.height;

            const posX = x * 100;
            const posY = y * 100;

            bg.style.backgroundPosition = `${posX}% ${posY}%`;
        });

        wrapper.addEventListener("mouseleave", () => {
            bg.style.backgroundPosition = "left top";
        });
    }
});
</script>

</html>