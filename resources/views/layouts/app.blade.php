<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'はじめてのネットショッピング') }}@yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/jquery.min.js') }}" defer></script> -->
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/ajaxzip3.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modal.js') }}" defer></script>
    <script src="{{ asset('js/policy.js') }}" defer></script>
</script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="{{ asset('css/policy.css') }}" rel="stylesheet">
<LINK rel="shortcut icon" href="{{asset('images/favicon.png')}}">
<style>
    body{
        background-color: #DDDDDD!important;
    }

}
</style>

@yield('style')

</head>
<body>

    <!-- ヘッダー -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #003300;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <div class="moji2 mr-5 mt-2" style="color: white;"><p>はじめてのネットショッピング</p></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item container">
                            <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('ログイン') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item container ml-4">
                            <a class="nav-link" href="{{ route('register') }}" style="color: white;">{{ __('新規登録') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown mr-5">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle box2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <a href="{{ url('order') }}" class="ml-3 mr-5"><img src="{{url('../images/cart.png')}}" class="cartlogo"></a>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>

@yield('content')

<!-- フッター -->
<footer>
    <div class="footerv2-w3ls">
        <div class="container-fluid footer-copy_w3ls mt-5 agile_btxt">
            <div class="d-lg-flex justify-content-between">
                <div class="mt-2 sub-some align-self-lg-center">
                </div>
                <div class="cpy-right align-self-center">
                    <p>はじめてのネットショッピング | Created by team34 </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
