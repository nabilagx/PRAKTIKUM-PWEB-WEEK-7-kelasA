<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-pink {
        background-color: pink;
        }
        .corner-image {
        position: absolute;
        top: 0;
        width: auto;
        height: 100px;
        }
        @media (max-width: 768px) {
        .corner-image {
            height: 80px;
        }
    }
  </style>
</head>
<body class="h-full bg-pink-50">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto corner-image left-0" src="{{ asset('Images/bunga.png') }}" alt="logo">  
      <img class="mx-auto h-10 w-auto corner-image right-0" src="{{ asset('Images/bunga.png') }}" alt="decoration">  </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
   
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="{{ asset('Images/contact-person-pink.png') }}" alt="logo">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-pink-400">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
        <input 
            id="email" 
            name="email" 
            type="email" 
            autocomplete="email" 
            required 
            class="block w-full px-4 py-2 text-pink-700 placeholder-pink-300 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm sm:leading-6"
            placeholder="Masukkan alamat email Anda"/>        
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-pink-600 hover:text-pink-300">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
        <input 
            id="password" 
            name="password" 
            type="password" 
            autocomplete="current-password" 
            required 
            class="block w-full px-4 py-2 text-pink-700 placeholder-pink-300 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm" placeholder="Masukkan password Anda">
        </div>
      </div>

      <br>
    </form>
    <form action="/contact" method="get">  
    <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-pink-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Sign in</button>      
    </div>
    </form>
    <p class="mt-10 text-center text-sm text-gray-500">
      Don't have any account?
      <a href="#" class="font-semibold leading-6 text-pink-600 hover:text-pink-300">Register</a>
    </p>
  </div>
</div>
 
</body>
</html>