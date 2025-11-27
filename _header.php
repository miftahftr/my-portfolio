<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Miftah — Web Developer</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Poppins:wght@600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="output.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-bg text-gray-200 antialiased selection:bg-accent selection:text-black">
  <header class="fixed w-full z-40 top-0 left-0 py-4" x-data="{ isOpen: false }">
    <nav
      class="max-w-6xl mx-auto px-5 sm:px-6 lg:px-8 flex items-center justify-between h-16 bg-bg/70 backdrop-blur-md border border-white/5 rounded-full shadow-lg">
      <a href="#hero" class="flex items-center gap-3">
        <div
          class="w-10 h-10 rounded-full bg-gradient-to-br from-accent to-accent-light flex items-center justify-center text-black font-bold shadow-neon">
          M</div>
        <span class="hidden sm:inline font-display font-extrabold text-white">Miftah</span>
      </a>

      <ul class="hidden md:flex items-center gap-6 text-sm">
        <li><a href="#about" class="hover:text-white transition">About</a></li>
        <li><a href="#skills" class="hover:text-white transition">Skills</a></li>
        <li><a href="#projects" class="hover:text-white transition">Projects</a></li>
        <li><a href="#testimonials" class="hover:text-white transition">Testimonials</a></li>
        <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
      </ul>

      <div class="md:hidden">
        <button @click="isOpen = !isOpen" class="p-2 rounded-md" aria-label="Open mobile menu">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </nav>

    <div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95"
      class="fixed inset-0 z-50 bg-bg/95 backdrop-blur-lg flex flex-col items-center justify-center md:hidden"
      @click.away="isOpen = false">
      <button @click="isOpen = false" class="absolute top-8 right-6 p-2 rounded-md" aria-label="Close mobile menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <ul class="flex flex-col items-center gap-8 text-2xl font-display font-bold">
        <li><a href="#about" class="hover:text-accent transition" @click="isOpen = false">About</a></li>
        <li><a href="#skills" class="hover:text-accent transition" @click="isOpen = false">Skills</a></li>
        <li><a href="#projects" class="hover:text-accent transition" @click="isOpen = false">Projects</a></li>
        <li><a href="#testimonials" class="hover:text-accent transition" @click="isOpen = false">Testimonials</a></li>
        <li><a href="#contact" class="hover:text-accent transition" @click="isOpen = false">Contact</a></li>
      </ul>
    </div>
  </header>

  <main class=""></main>