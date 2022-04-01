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
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Url</th>
                <th scope="col">Count</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visits['data'] as $visit)
                <tr>
                    <td>{{ $visit['url'] }}</td>
                    <td>{{ $visit['url_count'] }}</td>
                    <td>{{ $visit['last_created'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    @for ($i = 1; $i <= $visits['last_page']; $i++)
                        <li class="page-item {{ $i == $visits['current_page'] ? "active" : "" }}"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                    @endfor
                </ul>
            </nav>

        </div>
    </div>

</div>

</body>
</html>
