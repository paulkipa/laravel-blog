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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-faded shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">SAMARET SACCO LIMITED
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" title="kipaap">
                    <span class="navbar-toggler-icon">1211</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @guest
                    @if (Route::has('register'))

                    @endif
                    @else
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                        {{-- <li><a href="post/create" class="btn btn-outline-success"><i class="fa fa-home"></i>Create Post</a> </li> --}}
                        <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i><span>Dashboard</span></a>
                        </li>
                                               
                        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="fa fa-money"></i><span>Loans</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="bulkstatementxls" data-toggle=""><i class="fa fa-edit"></i><span>Loan Application</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="purchase_report" data-toggle=""><i class="fa fa-archive"></i><span>View Loans</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="customer_report" data-toggle=""><i class="fa fa-group"></i><span>Loan Guarantors</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="purchase_report?expired=1" data-toggle=""><i class="fa fa-exclamation-circle"></i><span>Loan Statement</span></a>
                                </li>
                            </ul>

                        </li>

                        <li class="nav-item"><a class="nav-link" href="/post/create"><i class="fa fa-money"></i><span>Guarantors</span></a>
                        </li>                
                        <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-clipboard"></i><span>Statements</span></a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-cogs"></i><span>Other Requests</span></a>
                        </li>
                    </ul>
                    
                    @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                         @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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