<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://kit.fontawesome.com/0c56c59398.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sai Nyi Nyi Tun</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            }
    </style>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-3 rounded-b-2xl top-0 sticky bg-slate-800 text-white">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div>
                    <a href="{{ url('/') }}" class="font-semibold text-gray-100 no-underline">
                        <i class="fa-solid fa-house-laptop text-5xl"></i>
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">HOME</a>
                    <a class="no-underline hover:underline" href="/blog">BLOG</a>

                    <div class="dropdown inline-block relative">
                          <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-3xl inline-flex items-center">
                            <span class="mr-1"><i class="fa-solid fa-user"></i></span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                          </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 bg-gray-200 rounded">
                            @guest
                            <li>
                                <a class="rounded bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('login') }}">LOGIN</a>
                            </li>
                            @if (Route::has('register'))
                            <li>
                                <a class="rounded bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('register') }}">REGISTER</a>
                            </li>
                            @endif
                        @else
                            <span class="rounded bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">{{ Auth::user()->name }}</span>
    
                            <a href="{{ route('logout') }}"
                               class="rounded bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
            
                          </ul>
                        </div>
                   
                </nav>
            </div>
        </header>
        
        <div>
         @yield('content')
        </div>

    <div> 
        @include('layouts.footer')
    </div>

    </div>

</body>
</html>
