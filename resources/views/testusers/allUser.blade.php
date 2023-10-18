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

    {{--
    <x-alerts.alert title='user' clr='info' /> --}}

    <x-alert message='this i' title='user' clr='danger'>

        <h1> this is from the inside</h1>
        <x-slot name='in_side_slot'>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat pariatur nobis dolorum officiis harum
                commodi laborum eligendi totam quisquam, culpa rem voluptatibus recusandae corporis autem in, minus
                nulla expedita aliquid.

            </p>
        </x-slot>
    </x-alert>


    {{--

    <>

    </ x-folder.alert> --}}



    {{-- @include('compo.alert') --}}
    {{-- @dump(Session::all()) --}}
    <h1> all users </h1>
    <form action="{{ route('user.index') }}" method="get">
        <select name="cat_select" id="">

            <option value="*">all</option>
            <option value="name">user name</option>
            <option value="email">user em</option>
            <option value="password">user pw</option>

        </select>
        <input type="text" name="search">
        <x-btns.btn t='search' clr='primary' />

    </form>
    <a href="{{ route('user.create') }}" class="btn btn-success">add new user</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">user name</th>
                <th scope="col">user email</th>
                <th scope="col">user pwass</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $data as $ind => $d )

            <tr>
                <th scope="row">{{ $ind + 1 }}</th>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->password }}</td>

                <td>
                    <a href="{{ route('user.edit' , ['user' => $d->id ]) }}" class="btn btn-info">edt</a>

                    <form action="{{ route('user.destroy' , ['user' => $d->id ]) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <x-btns.btn t='delete' clr='danger' />
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</body>

</html>