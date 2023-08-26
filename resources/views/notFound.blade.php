<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A.Alsaeed</title>
        @vite('resources/css/app.css', 'resources/scss/app.scss')
        <link rel="icon" href="{{ asset('imgs/logo.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animatedCom.css') }}">
        <link rel="stylesheet" href="{{ asset('js/animated.js') }}">
        <link rel="stylesheet" href="{{ asset('imgs/') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        
    </head>
    <body class="select-none">
      <div class="container">
        {{-- Overview --}}
        <section id="home skills" class="bg-transparent dark:bg-gray-900 ">
          <div class="grid max-w-screen-xl px-4 pt-10 pb-6 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-20">
              <div class="mr-auto place-self-center lg:col-span-7">
                  <h1 class="animate__animated animate__fadeInLeftBig uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Page Not Found!</h1>
                  <div>
                      <button class="comic-button animate__animated animate__fadeInLeftBig animate__delay-1s"><a href="/en">{{ __('mysitelang.navHome') }}</a></button>
                  </div>
              </div>
              <div class="hidden lg:mt-0 lg:col-span-5 lg:flex animate__animated animate__fadeInRightBig">
                  <img src="{{ asset('imgs/1111.png') }}" height="80" alt="hero image">
              </div>  
          </div>
        </section>
      </div>
    </body>
</html>