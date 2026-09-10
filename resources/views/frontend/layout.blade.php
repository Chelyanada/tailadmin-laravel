<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLUTECH DINAMIS ABADI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/style.css', 'resources/js/main.js'])

    <script>
      window.tailwind = window.tailwind || {};
      window.tailwind.config = {
          theme:{
              extend: {
                  colors: {
                      primary: '#2c3e50',
                      secondary:'#1A252f',
                      accent:'#e67e22',
                      surface:'#f8f9fA',

                  },
                  fontFamily: {
                      sans: ['Chivo', 'sans-serif'],
                  },
                  borderRadius: {
                      'none': '0',
                  }
              }
          }
      }
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/tailwind.config.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white text-primary antialiased">

@include('frontend.header')

<main>
    @yield('content')
</main>
  

   <!-- Footer -->
@include('frontend.footer')

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html> 