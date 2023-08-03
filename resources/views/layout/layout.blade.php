<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    .d-none{
        display: none;
    }
</style>
<body>
    <header>
        <p>Crud Ajax</p>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('create')}}">Create</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="message" class="d-none">
        </div>
        <div>
            @yield('content')
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
</body>
</html>
