<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("header-title")</title>

    @vite(['resources/css/app.css', "resources/js/app.js"])
</head>
<body>
    <header>
        <div class="inner">
            <span class="logo">Magazin Dashline</span>
            <nav>
                <ul>
                    <li><a href="{{route('home')}}">Главная </a></li>
                    <li><a href="{{route('about')}}">Про нас </a></li>
                    <li><a href="{{route('contact')}}">Контакты </a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="content">
        @yield("content")
    </div>

    <footer>
        Все права защищены
    </footer>
</body>
</html>