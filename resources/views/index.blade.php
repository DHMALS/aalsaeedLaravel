<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{$dir}}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('mysitelang.siteName') }}</title>
        @vite('resources/css/app.css', 'resources/scss/app.scss')
        <link rel="icon" href="{{ asset('imgs/logo.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animatedCom.css') }}">
        <link rel="stylesheet" href="{{ asset('js/animated.js') }}">
        <link rel="stylesheet" href="{{ asset('imgs/') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ asset('js/darkmood.js') }}" defer></script>
    </head>
    @extends('widgets.navbar')
    <body class="select-none dark:bg-gray-900">
        <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
        @section('content')
        <div class="container">
            {{-- Overview --}}
            <section id="home skills" class="bg-transparent dark:bg-gray-900 ">
                <div class="grid max-w-screen-xl px-4 pt-20 pb-6 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 data-aos="slide-up" class="animate__animated animate__fadeInLeftBig uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white"> <p class=" text-primary capitalize ">{{ __('mysitelang.homePageTitleHi') }}</p> {{ __('mysitelang.homePageTitleMyName') }}</h1>
                        <p data-aos="slide-right" class="animate__animated animate__fadeInLeftBig animate__slow font-medium capitalize max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 ">
                            {{ __('mysitelang.homePageTitleMyDescribe') }}</p>
                        <div>
                            <button class="comic-button animate__animated animate__fadeInLeftBig animate__delay-1s"><a href="https://wa.me/0530264959">{{ __('mysitelang.overViewButton') }}</a></button>
                            <br>
                            <div class="carde mt-5 animate__animated animate__fadeInUpBig animate__delay-2s">
                                <a class="social-link1" href="https://github.com/DHMALS">
                                <svg class="dark:fill-white	" xmlns="http://www.w3.org/2000/svg" fill="black" height="1em" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                </a>
                                <a class="social-link2" href="www.linkedin.com/in/abdulrahmanalsaeed">
                                <svg class="dark:fill-white	" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="black"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>          </a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="flip-left" class="hidden lg:mt-0 lg:col-span-5 lg:flex animate__animated animate__fadeInRightBig">
                        <img src="{{ asset('imgs/About me-pana.png') }}" height="80" alt="hero image">
                    </div>  
                    
                </div>
                <div data-aos="slide-right" class="skillTitle grid justify-center animate__animated animate__shakeY animate__delay-1s dark:text-white">
                    {{ __('mysitelang.techStack') }}
                    </div>
                <div class="animate__animated">
                    
                    <div class="animate__animated animate__bounceIn animate__delay-1s flex flex-row flex-wrap	justify-center justify-items-center gap-4">
                        <div data-aos="fade-up" class=" ">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-html5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>
                            </button>
                        </div>
                        <div data-aos="fade-down" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M7.5 8h3v8l-2 -1" /> <path d="M16.5 8h-2.5a0.5 .5 0 0 0 -.5 .5v3a0.5 .5 0 0 0 .5 .5h1.423a0.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" /> </svg>                        </div>
                        <div data-aos="fade-down" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-bootstrap" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                                    <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                                    <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                                </svg>
                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-php" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-10 0a10 9 0 1 0 20 0a10 9 0 1 0 -20 0"></path>
                                    <path d="M5.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653"></path>
                                    <path d="M15.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653"></path>
                                    <path d="M12 7.5l-1 5.5"></path>
                                    <path d="M11.6 10h2.4l-.5 3"></path>
                                </svg>
                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-laravel" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 17l8 5l7 -4v-8l-4 -2.5l4 -2.5l4 2.5v4l-11 6.5l-4 -2.5v-7.5l-4 -2.5z"></path>
                                    <path d="M11 18v4"></path>
                                    <path d="M7 15.5l7 -4"></path>
                                    <path d="M14 7.5v4"></path>
                                    <path d="M14 11.5l4 2.5"></path>
                                    <path d="M11 13v-7.5l-4 -2.5l-4 2.5"></path>
                                    <path d="M7 8l4 -2.5"></path>
                                    <path d="M18 10l4 -2.5"></path>
                                </svg>
                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ux-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M7 10v2a2 2 0 1 0 4 0v-2"></path>
                                    <path d="M14 10l3 4"></path>
                                    <path d="M14 14l3 -4"></path>
                                </svg>
                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tailwind" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M11.667 6c-2.49 0 -4.044 1.222 -4.667 3.667c.933 -1.223 2.023 -1.68 3.267 -1.375c.71 .174 1.217 .68 1.778 1.24c.916 .912 2 1.968 4.288 1.968c2.49 0 4.044 -1.222 4.667 -3.667c-.933 1.223 -2.023 1.68 -3.267 1.375c-.71 -.174 -1.217 -.68 -1.778 -1.24c-.916 -.912 -1.975 -1.968 -4.288 -1.968zm-4 6.5c-2.49 0 -4.044 1.222 -4.667 3.667c.933 -1.223 2.023 -1.68 3.267 -1.375c.71 .174 1.217 .68 1.778 1.24c.916 .912 1.975 1.968 4.288 1.968c2.49 0 4.044 -1.222 4.667 -3.667c-.933 1.223 -2.023 1.68 -3.267 1.375c-.71 -.174 -1.217 -.68 -1.778 -1.24c-.916 -.912 -1.975 -1.968 -4.288 -1.968z"></path>
                                </svg>
                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sql" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 8a2 2 0 0 1 2 2v4a2 2 0 1 1 -4 0v-4a2 2 0 0 1 2 -2z"></path>
                                    <path d="M17 8v8h4"></path>
                                    <path d="M13 15l1 1"></path>
                                    <path d="M3 15a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1"></path>
                                </svg>
                            </button>
                        </div>
                        <div data-aos="fade-up" class="">
                            <button class="TechButton">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-figma" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M6 3m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z"></path>
                                    <path d="M9 9a3 3 0 0 0 0 6h3m-3 0a3 3 0 1 0 3 3v-15"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
            </section>
            {{-- About --}}
            <section id="about" class="bg-transparent dark:bg-gray-900">
                <div class=" grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12 lg:pt-16 ">
                    <div class="lg:mt-0 lg:col-span-5 lg:flex animate__animated animate__fadeInRightBig" data-aos="fade-up">
                        <img src="{{ asset('imgs/about10.png') }}" height="80" alt="hero image" >
                    </div> 
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 data-aos="slide-up" class="uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ __('mysitelang.aboutTitle') }} <br></h1>
                        <p data-aos="slide-up" class="max-w-2xl capitalize font-medium mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ __('mysitelang.aboutDescribe') }}</p>
                    </div>               
                </div>
            </section>

            {{-- portfolio --}}
            <section id="" class="bg-transparent dark:bg-gray-900">
                <div class=" max-w-screen-xl px-4 pt-10 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12 lg:pt-16 ">
                    <h1  data-aos="slide-up" class="uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ __('mysitelang.portfolioTitle') }} <br></h1>
                    <p  data-aos="slide-up" class="max-w-2xl capitalize font-medium mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ __('mysitelang.portfolioDescribe') }} <br></p>
                </div>
            </section>
            <section id="portfolio" class="bg-transparent dark:bg-gray-900">
                {{-- <div class=" grid max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12 lg:pt-20 "> --}}
                    {{-- <div class="mr-auto max-w-screen-xl">
                        <h1 data-aos="slide-up" class="uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ __('mysitelang.portfolioTitle') }} <br></h1>
                        <p data-aos="slide-up" class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ __('mysitelang.portfolioDescribe') }}</p>
                    </div>                --}}
                {{-- </div> --}}
                <div  class="projects">
                    {{-- SPMS --}}
                    <div data-aos="slide-up" class="projectCard bg-white-300 mb-8 rounded-md border-primary border-l-4 shadow-xl grid gap-4 max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-2  lg:pt-8 dark:bg-gray-600 ">
                        <div class="flex rounded-md shadow-xl justify-items-center justify-center">
                            <img class="w-full md:w-auto justify-items-center rounded-md shadow-xl" src="{{ asset('imgs/projectsImages/SPMS.png') }}" width="10" alt="spms" >
                        </div>
                        <div class="flex flex-row flex-wrap justify-items-center justify-center">
                            <div class="title uppercase items-center justify-items-center justify-center text-primary max-w-1xl mb-4 pt-5 text-2xl font-medium leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">{{ __('mysitelang.SPMSTitle') }}</div>
                            
                            <div class="info pl-4 pr-4 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">{{ __('mysitelang.SPMSDes') }}</div>
                            
                            <div class="Tools">
                                <div class="animate__animated animate__bounceIn animate__delay-1s flex flex-row flex-wrap items-center	justify-center justify-items-center gap-4">
                                    <div data-aos="fade-up" class=" ">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-html5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>                            </button>
                                    </div>
                                    <div data-aos="fade-up" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M7.5 8h3v8l-2 -1" /> <path d="M16.5 8h-2.5a0.5 .5 0 0 0 -.5 .5v3a0.5 .5 0 0 0 .5 .5h1.423a0.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" /> </svg>                        </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-bootstrap" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2" /> <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2" /> <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z" /> </svg>                            </button>
                                    </div>
                                    <div data-aos="fade-up" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-php" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-10 0a10 9 0 1 0 20 0a10 9 0 1 0 -20 0"></path>
                                                <path d="M5.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653"></path>
                                                <path d="M15.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653"></path>
                                                <path d="M12 7.5l-1 5.5"></path>
                                                <path d="M11.6 10h2.4l-.5 3"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-laravel" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 17l8 5l7 -4v-8l-4 -2.5l4 -2.5l4 2.5v4l-11 6.5l-4 -2.5v-7.5l-4 -2.5z"></path>
                                                <path d="M11 18v4"></path>
                                                <path d="M7 15.5l7 -4"></path>
                                                <path d="M14 7.5v4"></path>
                                                <path d="M14 11.5l4 2.5"></path>
                                                <path d="M11 13v-7.5l-4 -2.5l-4 2.5"></path>
                                                <path d="M7 8l4 -2.5"></path>
                                                <path d="M18 10l4 -2.5"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-up" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ux-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                <path d="M7 10v2a2 2 0 1 0 4 0v-2"></path>
                                                <path d="M14 10l3 4"></path>
                                                <path d="M14 14l3 -4"></path>
                                            </svg>
                                        </button>
                                    </div>
                                        
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-figma" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M6 3m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z"></path>
                                                <path d="M9 9a3 3 0 0 0 0 6h3m-3 0a3 3 0 1 0 3 3v-15"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="links mt-8 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                <div class="mt-10 grid grid-cols-2 gap-2 justify-center">
                                    <button class="button type1 disabled:opacity-50" disabled>
                                        <a href="https://everydayadvice.netlify.app/" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.demo') }}</span></a>
                                        </a>
                                    </button>
                                    <button class="button type1 disabled:opacity-50" disabled>
                                        <a href="https://github.com/DHMALS/AdviceAPI" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.github') }}</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- API --}}
                    <div data-aos="slide-up" class="projectCard bg-white-300 mb-8 rounded-md border-primary border-r-4 shadow-xl grid gap-4 max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-2  lg:pt-8 dark:bg-gray-600">
                        <div class="flex bg-primaryTrans rounded-md shadow-xl justify-items-center justify-center">
                            <img class="w-full md:w-auto justify-items-center md:block rounded-md shadow-xl" src="{{ asset('imgs/projectsImages/API.png') }}" width="10" alt="hero image" >
                        </div>
                        <div class="flex flex-row flex-wrap justify-items-center justify-center">
                            <div class="title uppercase items-center justify-items-center justify-center text-primary max-w-1xl mb-4 pt-5 text-2xl font-medium leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">{{ __('mysitelang.AdviceAPITitle') }}</div>
                            
                            <div class="info pl-4 pr-4 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">{{ __('mysitelang.AdviceAPIDes') }}</div>
                            
                            <div class="Tools">
                                <div class="animate__animated animate__bounceIn animate__delay-1s flex flex-row flex-wrap items-center	justify-center justify-items-center gap-4">
                                    <div data-aos="fade-up" class=" ">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-html5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>                            </button>
                                    </div>
                                    <div data-aos="fade-up" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M7.5 8h3v8l-2 -1" /> <path d="M16.5 8h-2.5a0.5 .5 0 0 0 -.5 .5v3a0.5 .5 0 0 0 .5 .5h1.423a0.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" /> </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-figma" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M6 3m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z"></path>
                                                <path d="M9 9a3 3 0 0 0 0 6h3m-3 0a3 3 0 1 0 3 3v-15"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="links mt-8 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                <div class="mt-10 grid grid-cols-2 gap-2 justify-center">
                                    <button class="button type1">
                                        <a href="https://everydayadvice.netlify.app/" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.demo') }}</span></a>
                                        </a>
                                    </button>
                                    <button class="button type1">
                                        <a href="https://github.com/DHMALS/AdviceAPI" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.github') }}</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- MyOldProta --}}
                    <div data-aos="slide-up" class="projectCard bg-white-300 mb-8 rounded-md border-primary border-l-4 shadow-xl grid gap-4 max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-2  lg:pt-8 dark:bg-gray-600">
                        {{-- <div class="flex bg-primaryTrans rounded-md shadow-xl justify-items-center justify-center h-auto">
                            <img class="w-48" src="{{ asset('imgs/projectsImages/125.webp') }}"alt="hero image" >
                        </div>     --}}

                        <div class="flex imgCont rounded-md shadow-xl" style="overflow: hidden; position: relative; ">
                            <img class="scroll-image" src="{{ asset('imgs/projectsImages/125.webp') }}"alt="hero image" >
                        </div>
                        <div class="flex bg-primaryTrans rounded-md shadow-xl justify-items-center justify-center xl:hidden lg:hidden">
                            <img class="w-full md:w-auto justify-items-center rounded-md shadow-xl" src="{{ asset('imgs/projectsImages/125Square.png') }}" width="10" alt="hero image" >
                        </div>

                        <div class="flex flex-row flex-wrap justify-items-center justify-center">
                            <div class="title uppercase items-center justify-items-center justify-center text-primary max-w-1xl mb-4 pt-5 text-2xl font-medium leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                {{ __('mysitelang.OldWebsiteTitle') }}
                            </div>
                            
                            <div class="info pl-4 pr-4 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">{{ __('mysitelang.OldWebsiteDes') }}</div>
                            
                            <div class="Tools">
                                <div class="animate__animated animate__bounceIn animate__delay-1s flex flex-row flex-wrap items-center	justify-center justify-items-center gap-4">
                                    <div data-aos="fade-up" class=" ">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-html5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>                            </button>
                                    </div>
                                    <div data-aos="fade-up" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M7.5 8h3v8l-2 -1" /> <path d="M16.5 8h-2.5a0.5 .5 0 0 0 -.5 .5v3a0.5 .5 0 0 0 .5 .5h1.423a0.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" /> </svg>                        </div>
                                    </div>
                            </div>
                            
                            <div class="links mt-8 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                <div class="mt-10 grid grid-cols-2 gap-2 justify-center">
                                    <button class="button type1">
                                        <a href="https://aalsaeedportfolio.netlify.app" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.demo') }}</span></a>
                                        </a>
                                    </button>
                                    <button class="button type1">
                                        <a href="https://github.com/DHMALS" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.github') }}</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    {{-- GHAPI --}}
                    <div data-aos="slide-up" class="projectCard bg-white-300 mb-8 rounded-md border-primary border-r-4 shadow-xl grid gap-4 max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-2  lg:pt-8 dark:bg-gray-600">
                        <div class="flex bg-primaryTrans rounded-md shadow-xl justify-items-center justify-center">
                            <img class="w-full md:w-auto justify-items-center rounded-md shadow-xl" src="{{ asset('imgs/projectsImages/GHAPI.png') }}" width="10" alt="hero image" >
                        </div>
                        <div class="flex flex-row flex-wrap justify-items-center justify-center">
                            <div class="title uppercase items-center justify-items-center justify-center text-primary max-w-1xl mb-4 pt-5 text-2xl font-medium leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                {{ __('mysitelang.GithubSearchAPITitle') }}
                            </div>
                            
                            <div class="info pl-4 pr-4 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                {{ __('mysitelang.GithubSearchAPIDes') }}
                            </div>
                            
                            <div class="Tools">
                                <div class="animate__animated animate__bounceIn animate__delay-1s flex flex-row flex-wrap items-center	justify-center justify-items-center gap-4">
                                    <div data-aos="fade-up" class=" ">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-html5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" /> </svg>                            </button>
                                    </div>
                                    <div data-aos="fade-up" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" /> <path d="M7.5 8h3v8l-2 -1" /> <path d="M16.5 8h-2.5a0.5 .5 0 0 0 -.5 .5v3a0.5 .5 0 0 0 .5 .5h1.423a0.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" /> </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-figma" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M6 3m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z"></path>
                                                <path d="M9 9a3 3 0 0 0 0 6h3m-3 0a3 3 0 1 0 3 3v-15"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="links mt-8 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                <div class="mt-10 grid grid-cols-2 gap-2 justify-center">
                                    <button class="button type1">
                                        <a href="https://githubquick.netlify.app/" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.demo') }}</span></a>
                                        </a>
                                    </button>
                                    <button class="button type1">
                                        <a href="https://github.com/DHMALS/GithubSearchByAPI" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.github') }}</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- HORSEUI --}}
                    <div data-aos="slide-up" class="projectCard bg-white-300 mb-8 rounded-md border-primary border-l-4 shadow-xl grid gap-4 max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-2  lg:pt-8 dark:bg-gray-600">
                        <div class="flex bg-primaryTrans rounded-md shadow-xl justify-items-center justify-center">
                            <img class="w-full md:w-auto justify-items-center rounded-md shadow-xl" src="{{ asset('imgs/projectsImages/HUI.png') }}" width="10" alt="hero image" >
                        </div>
                        <div class="flex flex-row flex-wrap justify-items-center justify-center">
                            <div class="title uppercase items-center justify-items-center justify-center text-primary max-w-1xl mb-4 pt-5 text-2xl font-medium leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                {{ __('mysitelang.HorseHubUITitle') }}
                            </div>
                            
                            <div class="info pl-4 pr-4 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                {{ __('mysitelang.HorseHubUIDes') }}
                            </div>
                            
                            <div class="Tools">
                                <div class="animate__animated animate__bounceIn animate__delay-1s flex flex-row flex-wrap items-center	justify-center justify-items-center gap-4">
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-figma" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M6 3m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z"></path>
                                                <path d="M9 9a3 3 0 0 0 0 6h3m-3 0a3 3 0 1 0 3 3v-15"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-aos="fade-down" class="">
                                        <button class="TechButtonProject">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ux-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                <path d="M7 10v2a2 2 0 1 0 4 0v-2"></path>
                                                <path d="M14 10l3 4"></path>
                                                <path d="M14 14l3 -4"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="links mt-8 max-w-2xl mb-4 text-1xl font-normal leading-none tracking-tight md:text-2xl xl:text-2xl dark:text-white">
                                <div class="mt-10 grid grid-cols-2 gap-2 justify-center">
                                    <button class="button type1">
                                        <a href="{{ asset('imgs/projectsImages/PFiles/APPUIHORSE.pdf') }}" target="_blank" download>
                                            <span class="btn-txt">{{ __('mysitelang.demo') }}</span></a>
                                        </a>
                                    </button>
                                    <button class="button type1">
                                        <a href="https://github.com/DHMALS" target="_blank">
                                            <span class="btn-txt">{{ __('mysitelang.github') }}</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            {{-- certificates --}}
            <section id="certificates" class="bg-transparent dark:bg-gray-900">
                <div class=" grid max-w-screen-xl px-4 pt-10 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12 lg:pt-16 ">
                    <div class="mr-auto place-self-center lg:col-span-12">
                    </div> 
                        <h1  data-aos="slide-up" class="uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ __('mysitelang.CertificatesTitle') }} <br></h1>

                </div>
            </section>
                <!-- certificates Items -->
                <div data-aos="slide-up" class="max-w-2xl mx-auto dark:bg-gray-900">

                    <div id="default-carousel " class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative h-128 rounded-lg sm:h-80 xl:h-111 2xl:h-222  border-white border-b-primary shadow-lg">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                <img src="/imgs/certificates/BSF.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/Esystem.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/blockchain.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                <img src="/imgs/certificates/GoogleMark.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/GData.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 6 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/dbAna.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 7 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                <img src="/imgs/certificates/dbAdmin.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 8 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/UX.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 9 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/UI.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 10 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                <img src="/imgs/certificates/cyyper.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 11 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/JS.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 12 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/imgs/certificates/linux.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6" data-carousel-slide-to="5"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 7" data-carousel-slide-to="6"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 8" data-carousel-slide-to="7"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 9" data-carousel-slide-to="8"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 10" data-carousel-slide-to="9"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 11" data-carousel-slide-to="10"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 12" data-carousel-slide-to="11"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-300 dark:bg-gray-800/30 group-hover:bg-gray-600 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-none dark:group-focus:ring-gray-800/70 group-focus:outline-primary">
                                <svg class="w-5 h-5 text-primary sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="#F86F03" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-300 dark:bg-gray-800/30 group-hover:bg-gray-600 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-none dark:group-focus:ring-gray-800/70 group-focus:outline-primary">
                                <svg class="w-5 h-5 text-primary sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="#F86F03" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>

                    {{-- <p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind CSS components. Learn
                        more
                        by going to the official <a class="text-blue-600 hover:underline"
                            href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite Documentation</a>.
                    </p> --}}
                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
            {{-- contact and footer --}}
            <section data-aos="fade-right" id="contact" class="bg-transparent dark:bg-gray-900">
                <div class=" grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 ">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="uppercase  max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ __('mysitelang.ContactTitle') }}<br></h1>
                        <p class="max-w-2xl capitalize font-medium mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ __('mysitelang.ContactDescribe') }}</a>.</p>
                    </div>  
                    <div class="mr-auto place-items-center lg:col-span-5">
                        <form class="form">
                            <input type="text" placeholder="{{ __('mysitelang.contactEmailInput') }}" class="input" name="contactMail">
                            <textarea placeholder="{{ __('mysitelang.contactMsgInput') }}" name="contactMessage"></textarea>
                            <button type="submit" class="buttonContact">
                                <span class="btn-txt">{{ __('mysitelang.contactButton') }}</span>
                            </button>
                        </form>
                </div>
            </section>
        </div>
        @endsection
        <script>AOS.init();</script>
        
    </body>
</html>
