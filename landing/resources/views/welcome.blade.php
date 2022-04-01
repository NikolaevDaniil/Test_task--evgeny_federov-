<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<div class="container">
    <div class="row">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="/1">Страница 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/2">Страница 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/3">Страница 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/4">Страница 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/activity">Админка</a>
            </li>
        </ul>
    </div>
    <h1>Сейчас страница {{ $id}}</h1>
</div>

</body>
</html>
