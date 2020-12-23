
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-6">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item offset-3">
                <a class="nav-link active" aria-current="page" href="{{ route('post.create') }}">Создать пост</a>
            </li>
        </ul>
        <form class="d-flex" action="{{route('post.index')}}">
            <input class="form-control me-2" name="search" type="search" placeholder="Найти пост" aria-label="Search">
            <button class="btn btn-outline-success offset-1" type="submit">Поиск</button>
        </form>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
<!-- /.container -->
</body>
</html>