<!DOCTYPE html>
<html>
<head>
    <title>UTS PWEB</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <nav class="bg-pink-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="{{ asset('Images/contact-person-pink.png') }}" alt="logo">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/contact" class="rounded-md bg-pink-900 px-3 py-2 text-sm font-medium text-white hover:bg-pink-700" aria-current="page">All Contact</a>
              <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-pink-700 hover:text-white">Log Out</a>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/contact" class="block rounded-md bg-pink-900 px-3 py-2 text-base font-medium text-white hover:bg-pink-700" aria-current="page">All Contact</a>
        <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-pink-700 hover:text-white">Log Out</a>
      </div>
      
    </div>
  </nav>

  <header class="bg-pink-100">
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center">
    <img class="h-10 w-10 mr-4" src="{{ asset('Images/bunga.png') }}" alt="Flower">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">All Contact</h1>
  </div>
</header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="container mx-auto">
        @yield('content')
        <br>
    </div>
    
    </div>
  </main>
  @include('footer')
</div>

</body>
</html>