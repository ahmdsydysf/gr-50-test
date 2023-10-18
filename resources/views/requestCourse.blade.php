{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<style>
    .eror-input {
        border: 2px red solid;
    }
</style>
<form action="{{ url('course/request') }}" method="post">
    {{-- <form action="{{ route('course.store') }}" method="post"> --}}
        @csrf
        <label for="">username</label>
        <br>

        <input type="text" name="username" id="" value="{{ old('username') }}">
        <br>
        @error('username')
        {{ $message }}
        @enderror
        <br>

        <br>
        <label for="">mobile</label>
        <br>

        <input type="text" class="@error('mobile') eror-input  @enderror" name="mobile" id=""
            value="{{ old('mobile') }}">
        <br>

        @foreach ($errors->get('mobile') as $error)
        <li>{{ $error }}</li>
        @endforeach
        <br>

        <label for="">email</label>
        <br>

        <input type="text" name="email" id="" value="{{ old('email') }}">
        <br>

        @error('email')
        {{ $message }}
        @enderror
        <br>

        <label for="">course</label>
        <br>

        <input type="text" name="course" id="" value="{{ old('course') }}">
        <br>

        @error('course')
        {{ $message }}
        @enderror

        <button>request</button>
    </form>
    @dd(Session::all())