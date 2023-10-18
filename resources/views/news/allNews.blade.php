<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>



    <h1> all news </h1>

    <a href="{{ route('news.create') }}" class="btn btn-success">add new news</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $allNews as $ind => $nw )

            <tr>
                <th scope="row">{{ $ind + 1 }}</th>
                <td>{{ $nw->title }}</td>
                <td>{{ $nw->description }}</td>
                <td>
                    <a href="{{ route('news.edit' , ['news' => $nw->id]) }}" class="btn btn-info">edt</a>
                    <a href="{{ route('news.show' , ['news' => $nw->id]) }}" class="btn btn-danger">del</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</body>

</html>