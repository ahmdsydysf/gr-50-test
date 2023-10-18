<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" value="{{ old('name') }}" placeholder="enter name">
    @error('name')
    {{ $message }}
    @enderror

    <input type="text" name="email" value="{{ old('email') }}" placeholder="enter email">
    @error('email')
    {{ $message }}
    @enderror

    <input type="password" name="password" value="{{ old('password') }}" placeholder="enter password">
    @error('password')
    {{ $message }}
    @enderror

    <x-btns.btn t='add new' clr='info' />
</form>