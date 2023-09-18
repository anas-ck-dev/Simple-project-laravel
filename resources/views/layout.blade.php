<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title") page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    </head>
    <body>
        <header>
            <div class="logo">
                <a href="{{route('home')}}" >
                    <img src="{{ asset('logo.gif') }}" alt="Logo-Learn-Laravel">
                </a>
            </div>
            <input type='radio' name="checkicon" id="nav-icon-check" hidden>
            <input type="radio" name="checkicon" id="nav-icon-check-close" hidden>
            <div class='nav-icon-check'>
                <label for="nav-icon-check-close"></label>
            </div>
            
            <nav>
                <div class="logo">
                    <a href="{{route('home')}}" id="Home">
                        <img src="{{ asset('logo.gif') }}" alt="Logo-Learn-Laravel">
                    </a>
                </div>
                <ul>
                    <li class="nav-item {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                        <a href="{{route('home')}}" id="Home">Home</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'computers.index' ? 'active' : '' }}">
                        <a href="{{ route('computers.index') }}">Computers</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'computers.create' ? 'active' : '' }}">
                        <a href="{{ route('computers.create') }}">Create</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'settings' ? 'active' : '' }}">
                        <a href="{{route('settings')}}">Settings</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                        <a href="{{route('contact')}}">Contact</a>
                    </li>           
                </ul>
            </nav>
            <label for="nav-icon-check" class="MediaIcon">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </header>

            @yield("content")

    </body>
</html>
