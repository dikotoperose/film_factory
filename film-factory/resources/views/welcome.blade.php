<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Film Factory</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=aclonica:400|alexandria:400" rel="stylesheet" />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Styles -->
        <style>
            #slider {
            overflow: hidden;
            width: 100vw;
            }

            #slider ul {
            list-style: none;
            }

            #slider ul li {
            height: 800px;
            width: 100vw;
            float: left;
            }

            #slider ul li img {
            height: 900px;
            width: 100vw;
            } 

            a.control_prev, a.control_next {
            background: rgba(0,0,0,0.3);
            border-radius: 50%;
            top: 40%;
            }

            a.control_prev:hover, a.control_next:hover {
            -webkit-transition: all 0.2s ease;
            }

            a.control_next {
            right: 0;
            }

            /* Dot Indicators */
            #s1 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: -36px;
            border-radius: 20px;
            z-index: 999;
            }

            #s2 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: -12px;
            border-radius: 20px;
            z-index: 999;
            }

            #s3 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: 12px;
            border-radius: 20px;
            z-index: 999;
            }

            #s4 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: 36px;
            border-radius: 20px;
            z-index: 999;
            }

            .active {
                background-color: #48BB78;
            opacity: 1;
            }

            #Slide1:checked + #s1 {
            background-color: #48BB78;
            opacity: 1;
            }

            #Slide2:checked + #s2 {
                background-color: #48BB78;
            opacity: 1;
            }

            #Slide3:checked + #s3 {
                background-color: #48BB78;
            opacity: 1;
            }

            #Slide4:checked + #s4 {
                background-color: #48BB78;
            opacity: 1;
            }
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}.bottom-nav{color:#fff!important;font-size:1.2rem!important;font-weight:600;padding-right:150px;transition: 0.3s; }.bottom-nav:hover{transform: scale(1.1);font-size:1.4rem}.logo{font-family:'Aclonica', sans-serif;color:rgb(217,14,102);font-size:2rem;padding:20px 0px 40px 170px;}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Alexandria, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-pink{--tw-bg-opacity:1;background-color:rgb(217,14,102)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
  
    <body class="antialiased">
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
      <!-- Logo -->
      <div class="flex relative justify-between h-16 logo" >
         Film Factory
      </div>
   </nav>
   <nav x-data="{ open: false }" class="bg-pink border-b border-gray-100 sticky top-0 z-50">
      <!-- Navigation Menu -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
      <div class="flex">
         <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
           
         </div>
      </div>
   </nav>

      <div id="slider" class="relative">
         <a href="#" class="control_next absolute lg:block p-4 m-4 z-40 cursor-pointer text-white hover:text-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="32px">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
         </a>
         <a href="#" class="control_prev absolute lg:block p-4 m-4 z-40 cursor-pointer text-white hover:text-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="32px">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
         </a>
         <ul class="relative m-0 p-0 h-1/2">
            <li class="relative block m-0 p-0 text-center"><img src="{{URL::asset('/images/supermario.jpg')}}" alt=""></li>
            <li class="relative block m-0 p-0 text-center"><img src="{{URL::asset('/images/antman.jpg')}}" alt=""></li>
            <li class="relative block m-0 p-0 text-center"><img src="{{URL::asset('/images/dungeons.jpg')}}" alt=""></li>
            <li class="relative block m-0 p-0 text-center"><img src="{{URL::asset('/images/scream.jpg')}}" alt=""></li>
         </ul>
         <!-- Dot Indicators -->
         <input checked type="radio" name="slide" id="Slide1" />
         <label class="bg-black opacity-50 hover:bg-green-500 hover:opacity-1 absolute cursor-pointer" for="Slide1" id="s1"></label>
         <input type="radio" name="slide" id="Slide2" />
         <label class="bg-black opacity-50 hover:bg-green-500 hover:opacity-1 absolute cursor-pointer" for="Slide2" id="s2"></label>
         <input type="radio" name="slide" id="Slide3" />
         <label class="bg-black opacity-50 hover:bg-green-500 hover:opacity-1 absolute cursor-pointer" for="Slide3" id="s3"></label>
         <input type="radio" name="slide" id="Slide4" />
         <label class="bg-black opacity-50 hover:bg-green-500 hover:opacity-1 absolute cursor-pointer" for="Slide4" id="s4"></label>
      </div>
   </div>

   <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
      @if (Route::has('login'))
      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
         @auth
         <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
         @else
         <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
         @if (Route::has('register'))
         <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
         @endif
         @endauth
      </div>
      @endif

      <div class="container mx-auto px-4 pt-16">
         <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="mt-8" id="">
               <div class="sm:col-span-3">
                  <label for="region" class="block tracking-wider text-orange-500 text-lg font-semibold">Region</label>
                  <div class="mt-2">
                     <select id="region" name="region" autocomplete="region-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-sm sm:text-sm sm:leading-6" style="height:38px">
                     <option>Select Region</option>
                     <option>Gauteng</option>
                     <option>Western Cape</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="mt-8" id="">
               <div class="sm:col-span-3">
                  <label for="cinema" class="block tracking-wider text-orange-500 text-lg font-semibold">Cinema</label>
                  <div class="mt-2">

                     <select id="cinema" name="cinema" autocomplete="cinema-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-sm sm:text-sm sm:leading-6" style="height:38px">
               
                     </select>
                  </div>
               </div>
            </div>
         </div>

         <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">

            @foreach ($movies as $movie)
            <div class="mt-8 movie-cards" id="{{$movie->code}}" data-title="{{$movie->title}}" style="cursor:pointer">
                <img src="{{ $movie->img_url }}" alt="img">
                <div class="bg-white py-4 px-2">
                    <a href="" class="text-lg mt-2 text-gray-500 b">{{$movie->title}}</a>
                    <span class="mx-2 text-gray-400">|</span>
                    <span class="text-sm text-orange-500">{{$movie->release_date}}</span>
                </div>
            </div>
            @endforeach
            </div>
    </div>
    <button class="border border-green-500 hover:bg-white-500 hover:text-red bg-green-500 text-white  px-4 py-2 rounded-md" onclick="showAll();">Show All Movies</button>

        <div class="popular-movies mt-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
               <div class="mt-8" id="">
       
                     <img src="{{URL::asset('/images/supermario.jpg')}}" alt="super mario">
              
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
               
                     <img src="{{URL::asset('/images/scream.jpg')}}" alt="super mario">
                
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
           
                     <img src="{{URL::asset('/images/dungeons.jpg')}}" alt="super mario">
              
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
              
                     <img src="{{URL::asset('/images/antman.jpg')}}" alt="super mario">
                
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8" id="">
                
                     <img src="{{URL::asset('/images/mermaid.jpg')}}" alt="super mario">
              
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>
               <div class="mt-8">
                  <a href="">
                     <img src="{{URL::asset('/images/puss.jpg')}}" alt="super mario">
                  </a>
                  <div class="bg-white py-4 px-2">
                     <a href="" class="text-lg mt-2 text-gray-500 b">The Super Marion Bros</a>
                     <span class="mx-2 text-gray-400">|</span>
                     <span class="text-sm text-orange-500">20 Mar, 2023</span>
                  </div>
               </div>

            </div>
        </div> 

    </div>
</body>
</html>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
    jQuery(document).ready(function ($) {

var interval = setInterval(function () {
      moveRight();
  }, 3000);

  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#slider').css({ width: slideWidth, height: slideHeight });
  
  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
      $('#slider ul').animate({
          left: + slideWidth
      }, 200, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  function moveRight() {
      $('#slider ul').animate({
          left: - slideWidth
      }, 200, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');

      });
  };

  $('a.control_prev').click(function () {
      moveLeft();
  });

  $('a.control_next').click(function () {
      moveRight();
  });

$("#slider ul").click(function(){
  //Stop the carousel on click
  clearInterval(interval);
});
});    


$(document).on("change", '#region', function () {
    var cinema_id = document.getElementById("cinema");
    cinema_id.innerHTML = "";

    @foreach ($cinemas as $cinema)

    var selectedRegion = document.getElementById('region').value;
    
    if ("{{ $cinema->region }}" == selectedRegion){
        var cinema_id = document.getElementById("cinema");
        var option = document.createElement("option");

        option.value = "{{ $cinema->name }}";
        option.text = "{{ $cinema->name }}";

        cinema_id.appendChild(option);
    }
    @endforeach
    });

    $(".movie-cards").on("click", function (e) {

            window.location.href = "{{ url('/login') }}";

    });

    $(document).on("change", '#cinema', function () {

        var movieCards = document.querySelectorAll(".movie-cards");

        for (var i = 0; i < movieCards.length; i++) 
            {
                movieCards[i].style.display = 'none';

            }

        @foreach ($movies as $movie)

    var selectedCinema = document.getElementById('cinema').value;
    
    if ("{{ $movie->cinema }}" == selectedCinema){

        var movieCards = document.querySelectorAll(".movie-cards");
        var code = "{{ $movie->code }}"

        for (var i = 0; i < movieCards.length; i++) 
        {
            if(movieCards[i].id === code)
            {
                var codeMatch = true;
                movieCards[i].style.display = "block";
            }

        }
    }

    @endforeach
    });

    function showAll()
    {
        var movieCards = document.querySelectorAll(".movie-cards");
        for (var i = 0; i < movieCards.length; i++) 
        {
            movieCards[i].style.display = "block";
        }
   }
</script>