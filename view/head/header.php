<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto PETI</title>
    <?php require_once("../sesion/seguridad.php");?>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .bg-gradient-navbar {
        background: linear-gradient(to right, #2563eb, #1d4ed8);
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <nav class="bg-gradient-navbar shadow-lg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <a href="../../" class="flex-shrink-0">
              <i data-lucide="home" class="h-8 w-8 text-white"></i>
            </a>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out flex items-center">
                  <i data-lucide="info" class="h-4 w-4 mr-1"></i>
                  Información
                </a>
                <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out flex items-center">
                  <i data-lucide="target" class="h-4 w-4 mr-1"></i>
                  Misión
                </a>
                <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out flex items-center">
                  <i data-lucide="star" class="h-4 w-4 mr-1"></i>
                  Visión
                </a>
                <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out flex items-center">
                  <i data-lucide="flag" class="h-4 w-4 mr-1"></i>
                  Valores
                </a>
                <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out flex items-center">
                  <i data-lucide="target" class="h-4 w-4 mr-1"></i>
                  Objetivos
                </a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <a href="../sesion/salir.php" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full transition duration-150 ease-in-out transform hover:scale-105">
              Cerrar Sesión
            </a>
          </div>
          <div class="-mr-2 flex md:hidden">
            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Abrir menú principal</span>
              <i data-lucide="menu" class="block h-6 w-6"></i>
              <i data-lucide="x" class="hidden h-6 w-6"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Información</a>
          <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Misión</a>
          <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Visión</a>
          <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Valores</a>
          <a href="#" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Objetivos</a>
        </div>
        <div class="pt-4 pb-3 border-t border-blue-700">
          <div class="flex items-center px-5">
            <a href="../sesion/salir.php" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full transition duration-150 ease-in-out transform hover:scale-105 text-center">
              Cerrar Sesión
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mx-auto mt-4">
      <!-- Contenido de la página aquí -->
    </div>

    <script>
      lucide.createIcons();
      
      // Toggle mobile menu
      const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
      const mobileMenu = document.getElementById('mobile-menu');
      const menuIcon = mobileMenuButton.querySelector('[data-lucide="menu"]');
      const closeIcon = mobileMenuButton.querySelector('[data-lucide="x"]');

      mobileMenuButton.addEventListener('click', () => {
        const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
        mobileMenuButton.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
      });
    </script>
  </body>
</html>