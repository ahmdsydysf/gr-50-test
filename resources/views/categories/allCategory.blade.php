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

    <x-alerts.alert title='category' clr='danger' />

    {{--

    <x-folder.alert>

        <x-folder.alert /> --}}



        {{-- @include('compo.alert') --}}
        {{-- @dump(Session::all()) --}}
        <h1> all Categories </h1>
        <form action="{{ route('category.index') }}" method="get">
            <select name="cat_select" id="">

                <option value="*">all</option>
                <option value="cat_name">category name</option>
                <option value="cat_desc">category description</option>
                <option value="cat_code">category code</option>

            </select>
            <input type="text" name="search">
            <button class="btn btn-primary">search <i class='fa fa-search'> </button>
        </form>
        <a href="{{ route('category.create') }}" class="btn btn-success">add new category</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">category name</th>
                    <th scope="col">category code</th>
                    <th scope="col">category Desc</th>
                    <th scope="col">category Img</th>
                    <th scope="col">category Status</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $data as $ind => $d )

                <tr>
                    <th scope="row">{{ $ind + 1 }}</th>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->cat_code }}</td>
                    <td>{{ $d->cat_desc }}</td>
                    <td><img src="{{ asset('images/category/' . $d->cat_img) }}" width="150px" height="150" alt=""></td>
                    <td>{{ $d->status }}</td>
                    <td>
                        <a href="{{ route('category.edit' , ['category' => $d->id ]) }}" class="btn btn-info">edt</a>

                        <form action="{{ route('category.destroy' , ['category' => $d->id ]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">del</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

</body>

</html>