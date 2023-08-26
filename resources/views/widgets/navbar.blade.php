<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="light" id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('mysitelang.siteName') }}</title>
        @vite('resources/css/app.css', 'resources/scss/app.scss', 'resources/css/output.css','resources/js/app.js')

        <link rel="stylesheet" href="{{ asset('css/components.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script type="js" src="{{ asset('js/darkmood.js') }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    </head>

    <body >
      <nav class="bg-white   border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center">
              <img src="{{ asset('imgs/logo.png') }}" class="h-8 mr-3" alt="alsaeed Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ __('mysitelang.siteName') }}</span>
          </a>
          

          <div class="flex md:order-2">
            <i class="bi bi-moon darkmode block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:pr-4 pt-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500"" id="toggleDark"></i>
            <button>
              {{-- <span class="button_top"></span> --}}
              <a class="button_top" href="{{ asset('files/AlsaCV2023.pdf') }}" download>{{ __('mysitelang.CV') }}</a>
            </button>
            
              <button data-collapse-toggle="navbar-cta" type="button" class="togButton inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 myNav" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
          </div>
          
          <div class="items-center content-center	 justify-between hidden w-full md:flex md:w-auto md:order-1 mynav" id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 dark:text-white">
              <li>
                <a href="#home" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500">{{ __('mysitelang.navHome') }}</a>
              </li>
              <li>
                <a href="#about" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500">{{ __('mysitelang.navAbout') }}</a>
              </li>
              <li>
                <a href="#portfolio" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500">{{ __('mysitelang.navPortfolio') }}</a>
              </li>
              <li>
                <a href="#certificates" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500">{{ __('mysitelang.navCertificates') }}</a>
              </li>
              <li>
                <a href="#contact" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500">{{ __('mysitelang.navContact') }}</a>
              </li>
              <li class="">
                <div class=" opacity-50" style="display: flex; align-items: center;">
                  <a href="{{ route('langConv','ar') }}" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500">عربي</a>
                  <hr style="height: 10px; border-left: 1px solid black; margin: 0 5px;">
                  <a href="{{ route('langConv','en') }}" class="block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500 dark:text-white">English</a>
                </div>
              </li>
              {{-- <li class="self-center"> --}}
                {{-- <i class="bi bi-moon darkmode block py-2 pl-3 pr-4 text-main-100 rounded hover:text-main-100:hover md:hover:bg-transparent md:hover:text-primary md:p-0 md:dark:hover:text-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 duration-500"" id="toggleDark"></i> --}}
                {{-- <label class="switch">
                  <input type="checkbox" name="darkModeToggle">
                  <span class="slider"></span>
                </label> --}}
              {{-- </li> --}}
            </ul>
          </div>
        </div>
      </nav>
      

      <div class="bg-cover bg-origin-content bg-no-repeat	bg-center " style="background-image: url('./imgs/bg.png')">
        @yield('content')
        
      <footer class="bg-primary rounded-lg shadow m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
          <span class="text-sm text-black-500 sm:text-center dark:text-gray-400">{{ __('mysitelang.copyRight') }} <a href="" class="hover:underline">{{ __('mysitelang.siteName') }}</a>. {{ __('mysitelang.copyRightMore') }}
        </span>
        {{-- <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-black-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#about" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#contact" class="hover:underline">Contact</a>
            </li>
        </ul> --}}
        </div>
      </footer>

      </div>
      <button id="topButton" class="fixed bottom-4 right-4 z-10 bg-primary hover:bg-primary text-white font-bold py-2 px-4 rounded-full hidden">
        {{ __('mysitelang.top') }}
      </button>
      <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("topButton").style.display = "block";
          } else {
            document.getElementById("topButton").style.display = "none";
          }
          document.getElementById("topButton").addEventListener("click", function() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
          });
        }
      </script>
      <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
