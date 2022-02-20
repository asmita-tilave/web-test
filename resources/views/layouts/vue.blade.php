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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app" class="w-full flow-root p-2">
    
    <div class="w-1/5 float-left">
    <div class="p-4 max-w-sm  left-menu-bar">
        <div class="flex">
            <div class="img-circle-ele">
</div>
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">Demo</span>
          <span class="mt-1 text-gray-500 text-sm">Panel 05</span>
        </div>
        </div>
        <!-- List -->
        <ul role="list" class="my-7 space-y-5">
            <li class="flex space-x-3">
                <span class="text-base font-bold menu-text">Menu</span>
            </li>
            <li class="flex space-x-3">
                <img src="/images/Home.svg" alt="home" class="menu-img">
                <a href="#">
                <span class="text-base menu-text">Home</span>
                </a>
            </li>
            <li class="flex space-x-3">
                <img src="/images/invest_wallet.svg" alt="home" class="menu-img">
                <a href="#">
                <span class="text-base menu-text">Invest Wallet</span>
                </a>
            </li>
            <li class="flex space-x-3 decoration-gray-500">
                <img src="/images/Reports.svg" alt="home" class="menu-img">
                <a href="#">
                <span class="text-base menu-text">Reports</span>
                </a>
            </li>
            <li class="flex space-x-3 decoration-gray-500">
                <img src="/images/Team.svg" alt="home" class="menu-img">
                <a href="/team">
                <span class="text-base menu-text">Team</span>
                </a>
            </li>
            <li class="flex space-x-3 decoration-gray-500">
                <img src="/images/Income.svg" alt="home" class="menu-img">
                <a href="#">
                <span class="text-base menu-text">Income</span>
                </a>
            </li>
            <li class="flex space-x-3 decoration-gray-500">
            <img src="/images/Withdrawal.svg" alt="home" class="menu-img">
            <a href="#">
                <span class="text-base menu-text">Withdrawal</span>
            </a>
            </li>
            <li class="flex space-x-3 decoration-gray-500">
            <img src="/images/Logout.svg" alt="home" class="menu-img">
            <a href="#">
                <span class="text-base menu-text">Logout</span>
            </a>
            </li>
            

        </ul>
        <div class="path-img">
        <img src="/images/Path 62774.svg" alt="home">
        <div class="referal-ele">
        <img src="/images/referral link.svg" alt="home">
        </div>
        </div>
    </div>
</div>
    <div class="w-4/5 float-right pr-5 pl-5 right-content">
        <header>
        @yield('header')
        </header>

        <main class="py-4">
            @yield('content')
        </main>
</div>

    </div>
</body>
</html>
