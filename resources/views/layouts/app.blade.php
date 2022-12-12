<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="public/favicon.ico">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    <svg width="163" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.405.5c1.294 0 2.42.213 3.38.64.96.427 1.7 1.04 2.22 1.84.52.8.78 1.733.78 2.8 0 1.067-.26 2-.78 2.8-.52.8-1.26 1.413-2.22 1.84-.96.427-2.086.64-3.38.64h-2.02v3.44H.665V.5h6.74Zm-.3 6.92c.64 0 1.12-.14 1.44-.42.32-.293.48-.7.48-1.22s-.16-.92-.48-1.2c-.32-.293-.8-.44-1.44-.44h-1.72v3.28h1.72Zm14.228 3.56h-1.28v3.52h-4.72V.5h6.74c1.294 0 2.42.213 3.38.64.96.427 1.7 1.04 2.22 1.84.52.8.78 1.733.78 2.8 0 1-.226 1.873-.68 2.62-.453.747-1.106 1.34-1.96 1.78l2.94 4.32h-5.04l-2.38-3.52Zm2.36-5.2c0-.52-.16-.92-.48-1.2-.32-.293-.8-.44-1.44-.44h-1.72v3.28h1.72c.64 0 1.12-.14 1.44-.42.32-.293.48-.7.48-1.22Zm13.883 9.04c-1.507 0-2.86-.313-4.06-.94-1.2-.627-2.14-1.493-2.82-2.6-.68-1.12-1.02-2.38-1.02-3.78s.34-2.653 1.02-3.76c.68-1.12 1.62-1.993 2.82-2.62 1.2-.627 2.553-.94 4.06-.94 1.506 0 2.86.313 4.06.94 1.2.627 2.14 1.5 2.82 2.62.68 1.107 1.02 2.36 1.02 3.76s-.34 2.66-1.02 3.78c-.68 1.107-1.62 1.973-2.82 2.6-1.2.627-2.554.94-4.06.94Zm0-3.82c.586 0 1.113-.14 1.58-.42.48-.293.86-.7 1.14-1.22.28-.533.42-1.153.42-1.86 0-.707-.14-1.32-.42-1.84a2.97 2.97 0 0 0-1.14-1.22 2.907 2.907 0 0 0-1.58-.44c-.587 0-1.12.147-1.6.44-.467.28-.84.687-1.12 1.22-.28.52-.42 1.133-.42 1.84 0 .707.14 1.327.42 1.86.28.52.653.927 1.12 1.22.48.28 1.013.42 1.6.42ZM47.189.5h6.9c1.56 0 2.933.287 4.12.86 1.2.56 2.127 1.367 2.78 2.42.667 1.053 1 2.293 1 3.72s-.333 2.667-1 3.72c-.653 1.053-1.58 1.867-2.78 2.44-1.187.56-2.56.84-4.12.84h-6.9V.5Zm6.7 10.32c1.013 0 1.82-.287 2.42-.86.613-.587.92-1.407.92-2.46s-.307-1.867-.92-2.44c-.6-.587-1.407-.88-2.42-.88h-1.98v6.64h1.98Zm16.523 4c-2.146 0-3.82-.58-5.02-1.74-1.2-1.16-1.8-2.787-1.8-4.88V.5h4.72v7.56c0 1.027.18 1.773.54 2.24.374.467.907.7 1.6.7.694 0 1.22-.233 1.58-.7.374-.467.56-1.213.56-2.24V.5h4.64v7.7c0 2.093-.6 3.72-1.8 4.88-1.2 1.16-2.873 1.74-5.02 1.74Zm16.224 0c-1.48 0-2.813-.307-4-.92-1.187-.627-2.12-1.493-2.8-2.6-.667-1.12-1-2.387-1-3.8 0-1.413.333-2.673 1-3.78a6.93 6.93 0 0 1 2.8-2.6c1.187-.627 2.52-.94 4-.94 1.36 0 2.573.24 3.64.72a6.757 6.757 0 0 1 2.64 2.08l-2.98 2.66C89.069 4.547 88.049 4 86.876 4c-.987 0-1.78.32-2.38.96-.6.627-.9 1.473-.9 2.54s.3 1.92.9 2.56c.6.627 1.393.94 2.38.94 1.173 0 2.193-.547 3.06-1.64l2.98 2.66a6.757 6.757 0 0 1-2.64 2.08c-1.067.48-2.28.72-3.64.72ZM97.22 4.16h-4.1V.5h12.92v3.66h-4.1V14.5h-4.72V4.16Zm15.266 10.66c-1.16 0-2.293-.127-3.4-.38-1.093-.267-1.993-.62-2.7-1.06l1.52-3.44c.667.387 1.413.7 2.24.94.827.227 1.62.34 2.38.34.653 0 1.12-.06 1.4-.18.28-.133.42-.327.42-.58 0-.293-.187-.513-.56-.66-.36-.147-.96-.307-1.8-.48-1.08-.227-1.98-.467-2.7-.72a4.732 4.732 0 0 1-1.88-1.28c-.533-.6-.8-1.407-.8-2.42 0-.88.247-1.68.74-2.4s1.227-1.287 2.2-1.7c.987-.413 2.18-.62 3.58-.62.96 0 1.9.107 2.82.32.933.2 1.753.5 2.46.9l-1.42 3.42c-1.373-.693-2.673-1.04-3.9-1.04-1.213 0-1.82.293-1.82.88 0 .28.18.493.54.64.36.133.953.28 1.78.44 1.067.2 1.967.433 2.7.7a4.534 4.534 0 0 1 1.9 1.26c.547.587.82 1.387.82 2.4 0 .88-.247 1.68-.74 2.4-.493.707-1.233 1.273-2.22 1.7-.973.413-2.16.62-3.56.62Zm10.769-10.66h-4.1V.5h12.92v3.66h-4.1V14.5h-4.72V4.16Zm18.883 7.9h-5.32l-.94 2.44h-4.8l6.12-14h4.64l6.12 14h-4.88l-.94-2.44Zm-1.3-3.4-1.36-3.52-1.36 3.52h2.72Zm13.873 2.32h-1.28v3.52h-4.72V.5h6.74c1.294 0 2.42.213 3.38.64.96.427 1.7 1.04 2.22 1.84.52.8.78 1.733.78 2.8 0 1-.226 1.873-.68 2.62-.453.747-1.106 1.34-1.96 1.78l2.94 4.32h-5.04l-2.38-3.52Zm2.36-5.2c0-.52-.16-.92-.48-1.2-.32-.293-.8-.44-1.44-.44h-1.72v3.28h1.72c.64 0 1.12-.14 1.44-.42.32-.293.48-.7.48-1.22Z" fill="currentColor"></path></svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="btn btn-primary" href="{{ '/' }}">На главную</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
